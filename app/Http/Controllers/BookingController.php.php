<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Booking;
use Mail;
class BookingController extends Controller
{
    //
    function Bookingindex($id,Request $request){
        $roombooking=Rooms::find($id);
        return view('pages.booking.index',['roombooking'=>$roombooking]);
    }

}
