<?php

namespace App\Http\Controllers;

use App\Subscriber;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Telegram\TelegramDriver;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send(Request $request)
    {
        $botman = app('botman');
        $messageText = $request->message;
        $message = OutgoingMessage::create($messageText);
        $receivers = $request->receivers;

        $receivers = $receivers === 'all' ? Subscriber::all() : Subscriber::where('chat_id', $receivers)->get();

        $receivers->each(function ($receiver) use ($botman, $message){
            $botman->say($message, $receiver->chat_id, TelegramDriver::class);
        });
        return back();
    }
}
