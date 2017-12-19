<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotels;
use App\Models\Rooms;
use App\Models\Locations;
use App\Models\Booking;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{
    //

	function getList (Request $request){
		$rooms=Rooms::paginate(5);

		return view( 'admin.rooms.list',['rooms' =>$rooms]);
	}
	function getCreat(){
		$location=Locations::all();
		$hotels=Hotels::all();
		return view('admin.rooms.create',['locations'=>$location,'hotels'=>$hotels ]);
	}
	function postStore(Request $request){
		$this->validate($request,[
			'name'=>'required|unique:Rooms,name|min:3|max:100',
			'price'=>'required|min:1'
		],[
		]);
        if ($request -> hasFile('img_upload'))
        {
            $file=$request->file('img_upload');
            $name =$file->getClientOriginalName();
            $name_image=str_random(4) ."_". $name;
            /*while (fileExists(" "))*/
            $year  = date( 'Y' );
            $month = date( 'm' );
            $file->storeAs("public/rooms/{$year}/{$month}",$name_image);
            $request->merge(['image'=>"rooms/{$year}/{$month}/{$name_image}"]); /*trường để lưu*/

        }

        $request->merge(['slug'=>changeTitle($request->name)]);
		  if(rooms::create($request->all())){
			return redirect()->route('admin.rooms.list')->with( 'notification', 'Edit successfully' );
		}
		else{
			return redirect()->route('admin.rooms.create');
		}
	}

	function getDelete($id){
		$rooms=Rooms::find($id);
		$rooms->delete();
		return redirect('/admin/rooms/list')->with('messagedelete','Delete successfully');
	}
	function getEdit($id){
		$rooms=Rooms::find($id);
		$locations=Locations::all();
		$hotels=Hotels::all();
		return view( 'admin.rooms.edit',['room'=>$rooms,'location'=>$locations,'hotel'=>$hotels] );
	}
	function postEdit(Request $request, $id){
		$rooms = Rooms::find($id);

		$this->validate( $request,
			[
				'name' => 'required|min:3|max:100',
				'price' =>'required',
				'max_adults'=>'required',
			]
		);
        if ($request -> hasFile('img_upload'))
        {
            $file=$request->file('img_upload');
            $name =$file->getClientOriginalName();
            $name_image=str_random(4) ."_". $name;
            /*while (fileExists(" "))*/
            $year  = date( 'Y' );
            $month = date( 'm' );
            $file->storeAs("public/rooms/{$year}/{$month}",$name_image);
            $request->merge(['image'=>"rooms/{$year}/{$month}/{$name_image}"]); /*trường để lưu*/

        }
        $request->merge(['slug'=>changeTitle($request->name)]);
		$rooms->update($request->all());

		return redirect( '/admin/rooms/edit/' . $id )->with( 'notification', 'Edit successfully' );
	}

}
