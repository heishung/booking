<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends \Eloquent
{
    //
    public $timestamps=false;
    protected $table ="post";
    protected $fillable =['title','content','data','slug','image'];
    protected $casts=[
        'data'=>'array',
    ];


}
