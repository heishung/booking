<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    //

     public function listpost(Request $request){
         $post=Post::paginate(4);
         return view(
           'admin.post.list',['posts'=>$post]
         );
    }
        function listServices(Request $request){
            $listservices=Post::where('slug','=','services')->paginate(4);
        /*    dd($listservices);*/
            return view('pages.post.listservices',['listservices'=>$listservices]);
        }
    function listPromotion(Request $request)
    {
        $promotion= Post::paginate(3)->where('slug','=','promotion');
         /*dd($post);*/
        return view('pages.post.list', ['promotion'=>$promotion]);
    }
    public function getcreate(){
         return view('admin.post.create');
    }
    public function store(Request $request )
    {
        /*dd($request);*/
        $this->validate($request,
        ['title'=>'required|unique:Post,title|min:3|max:100',
        ]
    );
        if ($request -> hasFile('upload_img'))
        {
            $file=$request->file('upload_img');

            $name =$file->getClientOriginalName();
            $name_image=str_random(4) ."_". $name;
            /*while (fileExists(" "))*/
            $year  = date( 'Y' );
            $month = date( 'm' );
            $file->storeAs("public/post/{$year}/{$month}",$name_image);
            $request->merge(['image'=>"post/{$year}/{$month}/{$name_image}"]); /*trường để lưu*/
        }
      /*  dd($request);*/
        if(Post::create($request->all())){
            \Log::info('Success');
            return redirect()->route('admin.post.list')->with( 'notification', 'Creat successfully' );
        }
        else{
            \Log::info('Error');
            return redirect()->route('admin.post.create')->with( 'notification', 'Something wrong' );
        }
    }
    public function getEdit ($id,Request $request){
        $post=Post::find($id);
        return view('admin.post.edit',['post'=>$post]);
    }
    public function postDetail ($id,Request $request){
        $post=Post::find($id);
        return view('pages.post.detail',['post'=>$post]);
    }
    public function postEdit(Request $request,$id)
    {
       /* dd($request->all());*/
        $post=Post::find($id);
       /* $this->validate($request,
            ['title'=>'required|min:3|max:100',
            ]);*/

        if ($request -> hasFile('upload_img'))
        {
            $file=$request->file('upload_img');
            $name =$file->getClientOriginalName();
            $name_image=str_random(4) ."_". $name;
            $year  = date( 'Y' );
            $month = date( 'm' );
            $file->storeAs("public/post/{$year}/{$month}",$name_image);
            $request->merge(['image'=>"post/{$year}/{$month}/{$name_image}"]); /*trường để lưu*/
        }
        /* dd($request);*/
        $post->update($request->all());
        return redirect('/admin/post/edit/'.$id)->with('notification','Edit successfully');
    }
    public function getdelete($id){
        $post=Post::find($id);
        $post->delete();
        return redirect('/admin/post/list/')->with('messagedelete','Delete successfully');
    }

}
