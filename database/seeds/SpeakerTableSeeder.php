<?php

use App\Speaker;
use Illuminate\Database\Seeder;

class SpeakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Speaker::truncate();
        Speaker::insert([
            [
                'name' => 'Amanda Folson',
                'twitter_handle' => 'AmbassadorAwsum',
                'photo_url' => 'https://laracon.eu/2018/assets/img/amanda.jpg',
            ],
            [
                'name' => 'Christopher Pitt',
                'twitter_handle' => 'assertchris',
                'photo_url' => 'https://laracon.eu/2018/assets/img/chris.jpg',
            ],
            [
                'name' => 'David McKay',
                'twitter_handle' => 'rawkode',
                'photo_url' => 'https://laracon.eu/2018/assets/img/david.jpg',
            ],
            [
                'name' => 'Erika Heidi',
                'twitter_handle' => 'erikaheidi',
                'photo_url' => 'https://laracon.eu/2018/assets/img/erika.jpg',
            ],
            [
                'name' => 'Jenny Shen',
                'twitter_handle' => 'jennyshen',
                'photo_url' => 'https://laracon.eu/2018/assets/img/jenny.jpg',
            ],
            [
                'name' => 'Marcel Pociot',
                'twitter_handle' => 'marcelpociot',
                'photo_url' => 'https://laracon.eu/2018/assets/img/marcel.jpg',
            ],
            [
                'name' => 'Prosper Otemuyiwa',
                'twitter_handle' => 'unicodeveloper',
                'photo_url' => 'https://laracon.eu/2018/assets/img/prosper.jpg',
            ],
            [
                'name' => 'Ross Tuck',
                'twitter_handle' => 'rosstuck',
                'photo_url' => 'https://laracon.eu/2018/assets/img/ross.png',
            ],
            [
                'name' => 'Taylor Otwell',
                'twitter_handle' => 'taylorotwell',
                'photo_url' => 'https://laracon.eu/2018/assets/img/taylor.jpg',
            ],
            [
                'name' => 'Frank de Jonge',
                'twitter_handle' => 'frankdejonge',
                'photo_url' => 'https://laracon.eu/2018/assets/img/frank.png',
            ],
        ]);
    }
}
