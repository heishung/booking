<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Reviews extends \Eloquent
{
	//
	protected $table="reviews";
	protected $fillable=['hotel_id','user_id','email','name','data'];
	public $timestamps=false;
	protected $casts=[
		'data'=>'array',
	];

    function hotel(){
        return $this->belongsTo(Hotels::class,'hotel_id','id');
    }
	function user(){
		return $this->belongsTo(User::class,'user_id');
	}
}
