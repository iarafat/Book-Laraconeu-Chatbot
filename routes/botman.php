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

$botman->group(['middleware' => $dialogflow], function (BotMan $bot) {
    $faqActions = collect([
        'faq.date',
        'faq.location',
        'faq.codeofconduct',
        'faq.hotels',
        'faq.journey',
        'faq.schedule',
        'faq.speakers',
        'faq.sponsors',
        'faq.whoisitfor',
        'faq.language',
    ]);
    $bot->hears($faqActions->implode('|'), function (BotMan $bot){
        $triggeredAction = $bot->getMessage()->getExtras()['apiAction'];
        $bot->reply("Triggered action {$triggeredAction}");
    })->stopsConversation();
});