<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    protected $dates = [
        'start_at',
        'created_at',
        'updated_at',
    ];

    public function getTimeAttribute()
    {
        return $this->start_at->format('H:i');
    }

    public static function asScheduleTextMessage()
    {
        return static::all()->sortBy('start_at')->groupBy(function ($talk){
            return $talk->start_at->format('d.m.Y');
        })->transform(function ($talkByDay, $key){
            $talkByDay->transform(function ($talk){
                return $talk->time.' - '.$talk->title;
            });
            $talkByDay->prepend('at '.$key);

            return $talkByDay->implode("\n");
        })->implode("\n");
    }

    /*public static function asScheduleTextMessage()
    {
        return static::all()->sortBy('start_at')->groupBy(function ($talk) {
            return $talk->start_at->format('d.m.Y');
        })->transform(function ($talkByDay, $key) {
            $talkByDay->transform(function ($talk) {
                return $talk->time.' - '.$talk->title;
            });
            $talkByDay->prepend('â†’ '.$key);
            return $talkByDay->implode("\n");
        })->implode("\n");
    }*/
}
