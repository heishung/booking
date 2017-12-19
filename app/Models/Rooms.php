<?php

namespace App\Models;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;

class Rooms extends \Eloquent
{
    //
	protected $table="rooms";
	protected $fillable=['name','info','slug','max_adults','max_child','image','overview','price','is_book','hotels_id'];
	public $timestamps=false;
	protected $casts=[
		'info'=>'array',
		'overview'=>'array'
	];

	function hotels(){
		return $this->belongsTo(Hotels::class,'hotels_id','id');
	}

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function booking(){
	    return $this->hasOne(Booking::class,'room_id','id');
    }


}
