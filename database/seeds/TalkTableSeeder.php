<?php

use App\Talk;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TalkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Talk::truncate();
        Talk::insert([
            [
                'speaker_id' => 1,
                'title' => 'Zero to API with Lumen',
                'start_at' => Carbon::create('2018', '08', '30', '09', '30')
            ],
            [
                'speaker_id' => 2,
                'title' => '5 [fun] ways to fall in love [again] with code',
                'start_at' => Carbon::create('2018', '08', '30', '09', '30')
            ],
            [
                'speaker_id' => 3,
                'title' => 'Kickass Laravel Development with Docker',
                'start_at' => Carbon::create('2018', '08', '30', '10', '30')
            ],
            [
                'speaker_id' => 4,
                'title' => 'TBA',
                'start_at' => Carbon::create('2018', '08', '30', '10', '30')
            ],
            [
                'speaker_id' => 5,
                'title' => 'Build bridges, not wallsâ€”Design for users across cultures',
                'start_at' => Carbon::create('2018', '08', '30', '11', '30')
            ],
            [
                'speaker_id' => 6,
                'title' => 'TBA',
                'start_at' => Carbon::create('2018', '08', '31', '09', '30')
            ],[
                'speaker_id' => 7,
                'title' => 'TBA',
                'start_at' => Carbon::create('2018', '08', '31', '10', '30')
            ],
            [
                'speaker_id' => 8,
                'title' => 'TBA',
                'start_at' => Carbon::create('2018', '08', '31', '13', '45')
            ],
            [
                'speaker_id' => 9,
                'title' => 'TBA',
                'start_at' => Carbon::create('2018', '08', '31', '13', '45')
            ],
            [
                'speaker_id' => 10,
                'title' => 'Pragmatic Event Sourcing in Laravel',
                'start_at' => Carbon::create('2018', '08', '31', '13', '45')
            ],
        ]);

    }
}
