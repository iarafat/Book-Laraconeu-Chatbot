<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class FaqJourneyConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Via Plane: Amsterdam airport is Europe\'s fourth-busiest airport and the world\'s 2nd largest hub airport, handling about 50 million passengers and 1.5 million tons of freight per year. Itis often ranked among the world\'s best airports by the Skytrax passenger survey.');
        $this->say("Via train: \n
-> Brussels - Amsterdam by train, from Euro¬29\n
-> Paris - Amsterdam by train, from Euro¬35\n
-> Frankfurt - Amsterdam by train from Euro¬39\n
-> Berlin - Amsterdam by train, from Euro¬39\n
-> London - Amsterdam by train, from Euro¬59");
    }
}
