<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\User;
use Illuminate\Http\Request;
use App\Models\Hotels;
class ReviewsController extends Controller
{
    //
	function getList (){
		$reviews=Reviews::with(['hotel','user'])->get();
		return view( 'admin.reviews.list', compact('reviews'));
	}

    public function getCreat() {
        $hotels = Hotels::pluck( 'name', 'id' );
        $user = User::pluck( 'name', 'id' );
        return view( 'admin.reviews.create', compact( 'hotels' ),compact( 'user' ) );
    }
	function postStore(Request $request){
		$reviews=Reviews::all();

		$this->validate($request,[
			'name'=>'required|unique:Reviews,name|min:3|max:100',
            'email' =>'required'
		]
		);
		if(reviews::create($request->all())){
			return redirect()->route('admin.reviews.list');
		}
		else{
			return redirect()->route('admin.reviews.create');
		}
	}
	function GetEdit($id){
        $reviews=Reviews::find($id);
        $hotels=Hotels::all();
        $users=User::all();
        return view( 'admin.reviews.edit',['user'=>$users,'hotel'=>$hotels,'review'=>$reviews] );
    }
    function postEdit(Request $request, $id){
        $reviews =Reviews::findOrFail($id);
        $this->validate( $request,
            [
                'name' => 'required|min:6|max:100',
                'email' =>'required'
            ]
        );
        $reviews->update($request->all());
        return redirect( '/admin/reviews/edit/'. $id )->with( 'notification', 'Edit successfully' );
    }
    function PostDelete($id){
        $review=Reviews::find($id);
        $review->delete();
        return redirect('admin/reviews/list');
    }
}
