<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends \Eloquent
{
    //
    protected $table ="booking";
    protected $fillable = [
        'full_name',
        'address','phone','room_id','email','check_in','check_uot','tour_id','address','mess','children','adults'];
    public function room()
    {
        return $this->hasOne(Rooms::class,'room_id');
    }
}
