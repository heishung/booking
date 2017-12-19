<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Hotels;
use App\Models\Rooms;
use App\Models\Locations;

class AjaxController extends Controller
{
    //
    function getHotels($location_id){
        $hotel=Hotels::Where('location_id',$location_id)->get();
        foreach ($hotel as $ht){
            echo "<option value'".$ht->id."'>$ht->name.</option>";
        }

    }
	/*function getCheckuot($id_location){
        $hotelsearch=Hotels::Where('id_location',$id_location)->get();
        foreach ($hotelsearch as $ht){
            echo "<option value'".$ht->id."'>.$ht->name.</option>";
    }*/

}
