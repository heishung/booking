<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getList(){
        $user=User::all();
        return view( 'admin\user\list',['user' =>$user]);
    }

    function getEdit(request $request,$id){
        $user = User::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }
    function postEdit(Request $request,$id){
        $user=User::find($id);
        $this->validate( $request,
            [
                'name'=>'required|unique:Users,name|min:6|max:100',
                'email'=>'required|unique:Users,name|min:6|max:100',
                'password'=>'required|min:6|max:100'
            ]
        );

        $user->update($request->all());
        return redirect( '/admin/user/edit/'.$id )->with( 'notification', 'Edit successfully' );
    }
    function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect('/admin/user/list');

    }
}
