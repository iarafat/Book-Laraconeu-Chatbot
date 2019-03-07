<?php

namespace Tests\BotMan;

use Illuminate\Foundation\Inspiring;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->bot
            ->receives('Hi')
            ->assertReply('Hello!');
    }
}
