<?php

namespace App\Models;


class Option extends \Eloquent
{
    //
    protected $table = 'option';
    protected $fillable = ['name', 'value'];
    public $timestamps = false;


    public function setValueAttribute($value)
    {
        if (is_array($value) || is_object($value))
            $this->attributes['value'] = \GuzzleHttp\json_encode($value);
        else
            $this->attributes['value'] = $value;
    }

    public function getValueAttribute($value)
    {
        $vl = null;
        try {
            $vl = \GuzzleHttp\json_decode($value);
        } catch (\Exception $exception) {
            $vl = $value;
        }

        return $vl;
    }
}
