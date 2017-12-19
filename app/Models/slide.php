<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slide extends \Eloquent
{
    //\
    protected $table='slide';
    protected $fillable=['image','nameslide','slidecontent'];
    public $timestamps=false;
}
