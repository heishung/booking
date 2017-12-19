<?php

namespace App\Http\Controllers;

use App\reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\MessageBag;
use App\Models\locations;
class LocationController extends Controller
{
    /**
     * createe a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
/*    public function index()
    {
        return view('admin.layuot.index');
    }*/
	public function getList()
	{
		$Locations=Locations::paginate(3);

		return view('admin.location.list',['Locations'=>$Locations]);
	}
	public function getcreate()
	{
		return view('admin.location.create');
	}

	/**
	 * @param Request $
	 */
	public function store(Request $request )
	{
		$this->validate($request,
			['name'=>'required|unique:Locations,name|min:6|max:100'
			]
		);

		$request->merge(['slug'=>changeTitle($request->name)]);
		/*dd($request->all());*/
        if ($request -> hasFile('upload_img'))
        {
            $file=$request->file('upload_img');

            $name =$file->getClientOriginalName();
            $name_image=str_random(4) ."_". $name;
            /*while (fileExists(" "))*/
            $year  = date( 'Y' );
            $month = date( 'm' );
            $file->storeAs("public/locations/{$year}/{$month}",$name_image);
            $request->merge(['image'=>"locations/{$year}/{$month}/{$name_image}"]); /*trường để lưu*/
        }
		if(Locations::create($request->all())){
			\Log::info('Success');
			return redirect()->route('admin.location.list');
		}
		else{
			\Log::info('Error');
			return redirect()->route('admin.location.create');
		}
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getEdit($id)
	{
		$locations=Locations::find($id);
		return view('admin.location.edit',['locations'=>$locations]);
	}

	/**
	 * @param Request $request
	 * @param $id
	 */
	public function postEdit(Request $request,$id)
	{
		/*dd($request->all());*/
		$locations=Locations::find($id);
		$this->validate($request,
			['name'=>'required|min:6|max:100'
			],
			[
				'name.required'=>'You have not entered a name yet',
				'name.unique'=>'The name already exists',
				'name.min'=>'The length must be between 3 and 100 characters',
				'name.max'=>'The length must be between 3 and 100 characters'
			]
			);
        if ($request -> hasFile('img_upload'))
        {
            $file=$request->file('img_upload');
            $name =$file->getClientOriginalName();
            $name_image=str_random(4) ."_". $name;
            $year  = date( 'Y' );
            $month = date( 'm' );
            $file->storeAs("public/locations/{$year}/{$month}",$name_image);
            $request->merge(['image'=>"locations/{$year}/{$month}/{$name_image}"]); /*trường để lưu*/
        }
        $request->merge(['slug'=>changeTitle($request->name)]);
       /* dd($request);*/
        $locations->update($request->all());
		return redirect('/admin/location/edit/'.$id)->with('notification','Edit successfully');

	}
	public function getdelete($id){
		$locations=Locations::find($id);
		$locations->delete();
		return redirect('/admin/location/list/')->with('messagedelete','Delete successfully');
	}


}
