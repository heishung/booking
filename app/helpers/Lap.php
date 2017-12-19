<?php
/**
 * Created by PhpStorm.
 * User: nghie
 * Date: 10/18/2017
 * Time: 11:47 AM
 */

namespace App\helpers;


class Lap
{
    static function getArrayVal($array, $key)
    {
        if (isset($array[$key]))
            return $array[$key];

        return null;
    }
}