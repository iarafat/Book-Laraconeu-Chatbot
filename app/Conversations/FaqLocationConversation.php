<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Attachments\Location;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

class FaqLocationConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Laracon EU 2018 is located in beautiful Amsterdam. ðŸ‡³ðŸ‡±');
        $attachment = new Location(52.3832816, 4.9205266);
        $message = OutgoingMessage::create('')->withAttachment($attachment);

        $this->say($message, [
            'title' => 'Laracon EU 2018',
            'address' => 'Kromhouthal Gedempt Hamerkanaal 231 1021 KP Amsterdam, the Netherlands',
        ]);

        $this->say('There is also a map with info about the surrounding: https://snazzymaps.com/embed/69943 ');
    }
}
