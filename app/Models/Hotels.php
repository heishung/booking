<?php

namespace App\Models;


class Hotels extends \Eloquent
{
    //
	protected $table="hotels";
	protected $fillable=['name','price_from','slug','info','image','overview','location_id','image'];
	public $timestamps=false;
	protected $casts=[
	    'image'=>'array',
		'data'=>'array',
		'overview'=>'array',
		'info'=>'array'
	];

	function location(){
		return $this->belongsTo(Locations::class,'location_id');
	}
	function rooms (){
		return $this->hasMany(Rooms::class,'hotels_id','id');
	}
	function reviews(){
	    return $this->hasMany(Reviews::class,'hotel_id','id');
    }
}
