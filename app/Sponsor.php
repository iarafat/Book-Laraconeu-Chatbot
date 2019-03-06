<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public static function asTextMessage()
    {
        return self::all()->transform(function ($sponsor){
            return '    -> '.$sponsor->name."\n     ".$sponsor->url;
        })->implode("\n");
    }
}
