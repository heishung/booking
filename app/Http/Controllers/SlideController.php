<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
class SlideController extends Controller
{
    //
    function getList(){
        $slide=slide::paginate(4);
        return view('admin.slide.list',['slides'=>$slide]);
    }
    function getcreat(){
        return view('admin.slide.create');
    }

        public function postStore(Request $request)
        {
            $this->validate($request,[
                'nameslide'=>'required|unique:slide,nameslide',
            ]);
            if ($request -> hasFile('upload_img'))
            {
                $file=$request->file('upload_img');

                $name =$file->getClientOriginalName();
                $name_image=str_random(4) ."_". $name;
                /*while (fileExists(" "))*/
                $year  = date( 'Y' );
                $month = date( 'm' );
                $file->storeAs("public/slide/{$year}/{$month}",$name_image);
                $request->merge(['image'=>"slide/{$year}/{$month}/{$name_image}"]); /*trường để lưu*/
            }
            /*dd($request);*/
        if(slide::create($request->all())){
            return redirect()->route('slide.list')->with( 'notification', 'Creat successfully' );
        }
        else{
            return redirect()->route('slide.creat');
        }
    }
    function getedit($id, Request $request){
        $slides=slide::find($id);
        return view('admin.slide.edit',['slides'=>$slides]);
    }
    function PostEdit(Request $request,$id){
        $slide=slide::find($id);
        if ($request -> hasFile('upload_img'))
        {
            $file=$request->file('upload_img');
            $name =$file->getClientOriginalName();
            $name_image=str_random(4) ."_". $name;
            $year  = date( 'Y' );
            $month = date( 'm' );
            $file->storeAs("public/slide/{$year}/{$month}",$name_image);
            $request->merge(['image'=>"slide/{$year}/{$month}/{$name_image}"]); /*trường để lưu*/
        }

        /* dd($request);*/
        $slide->update($request->all());
        return redirect()->route('slide.list')->with('notification', 'Edit successfully')->with('notification','Edit successfully');
    }
    function PostDelete($id,Request $request){
        $slide=slide::find($id);
        $slide->delete();
        return redirect()->route('slide.list')->with('messagedelete','Delete successfully');
    }
}
