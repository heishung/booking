<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Locations;
use App\Models\Rooms;
use Illuminate\Support\MessageBag;
use App\Models\Hotels;
use App\Models\Post;
use App\Models\Booking;
use Mail;
class FrontendController extends Controller
{
    function detailLocation($slug, Request $request)
    {
        $locations = Locations::with('hotels')->where('slug','=',$slug)->paginate(3)->first();
        /*dd($locations);*/
        return view('pages.location.detail',compact('locations'));
    }

    function index(Request $request)
    {
        $post= Post::paginate(3)->where('slug','=','promotion');
        $Locations = Locations::paginate(3);
       /* dd($post);*/
        return view('pages.home', ['Locations' => $Locations,'post'=>$post]);
    }

   /* function listRoom($id, Request $request)
    {
        $listrooms = Rooms::where('hotels_id', '=', $id);whereHas('hotels', function ($query) use ($id) {
            return $query->where('hotels_id', '=', $id);
        })->get();
        dd();
        return view('pages.hotel', ['room' => $id]);

    }*/

        function listRoom($hotels_id, Request $request){
            $hotelbox=Hotels::find($hotels_id);
            $listrooms=Rooms::where('hotels_id','=',$hotels_id)->get();

            return view('pages.hotel.detail', ['listrooms' => $listrooms,'hotelbox'=>$hotelbox]);
    }


    function bookingstore(Request $request){
        $request->check_in = date('m-d-Y ');
        $request->check_uot= date('m-d-Y ');
       $this->validate($request,[
            'full_name'=>'required|min:6|max:100',
              'room_id'=>'unique:Booking,room_id',
              'phone'=>'required',
                'email'=>'required|email',
                'address'=>'required',
                'adults'=>'required',
            ],[

       ]);
            $data=array(
                'email'=>$request->email,
                'room_id'=>$request->room_id,
                'full_name'=>$request->full_name,
                'phone'=>$request->phone,
                'mess'=>$request->mess,
                'children'=>$request->children,
                'adlults'=>$request->adlults,
                'address'=>$request->adress,
                'survey'=>['Q1'=>'hello','Q2'=>'yes']
                );
            /*dd($data);*/
            Mail::send('pages.booking.contactbooking',$data,function ($message) use($data){
                $message->from($data['email']);
                $message->to('hungnghiem@7gmt.com.vn');
            });

        if(Booking::create($request->all())){
            \Log::info('Success');
            return redirect()->route('bookingindex',['id'=>$request->room_id])->with( 'notification', 'Booking successfully' );
        }
        else{
            \Log::info('Error');
            return redirect()->route('booking'. $request->room_id);
        }
    }
}


