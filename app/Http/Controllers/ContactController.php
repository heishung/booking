<?php

namespace App\Http\Controllers;
use  App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
            function index(){
                return view('pages.contactus.contactfrom');
            }
             function storeContact(Request $request){

        $this->validate($request,
            [
                'name'=>'required|min:6|max:100',
                'email'=>'required',
                'phone'=>'required|min:10|max:11',
            ]
        );
        $request->address =[

        ];
        if(Contact::create($request->all())){
            return redirect()->route('contactindex')->with( 'notification', 'Contact successfully' );
        }
        else{
            \Log::info('Error');
            return redirect()->route('contactindex');
        }
    }
}
