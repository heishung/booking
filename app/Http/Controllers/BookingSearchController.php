<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Locations;
use App\Models\Booking;
class BookingSearchController extends Controller
{
    //

    function BookingGuide( Request $request)
    {

        $hotel = Hotels::with('rooms')->Where('location_id', $request->location)->get();
        /*dd($hotel);*/
        return view('frontend.search', ['hotels' => $hotel]);
        /*$roomsearch=Rooms::whereHas('booking',function ($query)use($request)
        {
            $book =Booking::select('id')->get();
            $hotel=Hotels::with('rooms')->Where('location_id',$request->location)->get();
            dd($request);
            $query->where('check_uot','!=',$request->check_in);})->get();
            dd($roomsearch);
        }*/
    }
}
