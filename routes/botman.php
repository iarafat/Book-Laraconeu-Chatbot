<?php

use App\Conversations\FaqCodeOfConductConversation;
use App\Conversations\FaqDateConversation;
use App\Conversations\FaqHotelsConversation;
use App\Conversations\FaqJourneyConversation;
use App\Conversations\FaqLanguageConversation;
use App\Conversations\FaqLocationConversation;
use App\Conversations\FaqScheduleConversation;
use App\Conversations\FaqSpeakersConversation;
use App\Conversations\FaqSponsorsConversation;
use App\Conversations\FaqWhoIsItForConversation;
use App\Conversations\OnboardingConversation;
use App\Conversations\PrivacySubscriptionConversation;
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Middleware\Dialogflow;

$botman = resolve('botman');

$dialogflow = Dialogflow::create(getenv('DIALOGFLOW_TOKEN'))->listenForAction();
$botman->middleware->received($dialogflow);

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('/start|GET_STARTED', function (BotMan $bot){
    $bot->startConversation(new OnboardingConversation());
});

$botman->group(['middleware' => $dialogflow], function (BotMan $bot){
    $bot->hears('faq.codeofconduct', function (BotMan $bot){
        $bot->startConversation(new FaqCodeOfConductConversation());
    })->stopsConversation();

    $bot->hears('faq.date', function (BotMan $bot){
        $bot->startConversation(new FaqDateConversation());
    })->stopsConversation();

    $bot->hears('faq.hotels', function (BotMan $bot){
        $bot->startConversation(new FaqHotelsConversation());
    })->stopsConversation();

    $bot->hears('faq.journey', function (BotMan $bot){
        $bot->startConversation(new FaqJourneyConversation());
    })->stopsConversation();

    $bot->hears('faq.language', function (BotMan $bot){
        $bot->startConversation(new FaqLanguageConversation());
    })->stopsConversation();

    $bot->hears('faq.location', function (BotMan $bot){
        $bot->startConversation(new FaqLocationConversation());
    })->stopsConversation();

    $bot->hears('faq.whoisitfor', function (BotMan $bot){
        $bot->startConversation(new FaqWhoIsItForConversation());
    })->stopsConversation();

    $bot->hears('faq.speakers', function (BotMan $bot){
        $bot->startConversation(new FaqSpeakersConversation());
    })->stopsConversation();

    $bot->hears('faq.sponsors', function (BotMan $bot){
        $bot->startConversation(new FaqSponsorsConversation());
    })->stopsConversation();

    $bot->hears('faq.schedule', function (BotMan $bot){
        $bot->startConversation(new FaqScheduleConversation());
    })->stopsConversation();

    $bot->hears('privacy.subscription', function (BotMan $bot){
        $bot->startConversation(new PrivacySubscriptionConversation());
    })->stopsConversation();
});