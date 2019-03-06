<?php

use App\Conversations\OnboardingConversation;
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;

$botman = resolve('botman');

$dialogflow = \BotMan\BotMan\Middleware\Dialogflow::create(getenv('DIALOGFLOW_TOKEN'))->listenForAction();
$botman->middleware->received($dialogflow);

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('/start|GET_STARTED', function (BotMan $bot){
    $bot->startConversation(new OnboardingConversation());
});

/*$botman->hears('faq.date', function (BotMan $bot){
    $bot->reply('FAQ Date triggered');
})->middleware($dialogflow);*/