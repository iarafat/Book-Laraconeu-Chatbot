<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ['driver', 'chat_id', 'first_name', 'is_tester'];


    public static function storeFromBotManUser(string $driverName, $botmanUser)
    {
        self::updateOrCreate(
            ['chat_id' => $botmanUser->getId()],
            [
                'driver' => $driverName,
                'chat_id' => $botmanUser->getId(),
                'first_name' => $botmanUser->getFirstName(),
            ]);
    }

    public static function deleteUserIfGiven(string $chatId)
    {
        $subscriber = self::where('chat_id', $chatId)->first();
        if ($subscriber){
            $subscriber->delete();
        }
    }

}
