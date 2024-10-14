<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate([
            'id' => 1,
        ],[
            'id' => 1,
            'facebook' => 'https://www.facebook.com',
            'twitter' => 'https://www.twitter.com',
            'instagram' => 'https://www.instagram.com',
            'tiktok' => 'https://www.tiktok.com',
            'tripadvisor' => 'https://www.tripadvisor.com',
            'whatsapp' => 'https://www.whatsapp.com',
            'location' => 'Istanbul',
            'city' => 'Turkey',
            'logo_main' => '/images/logo.png',
            'logo_footer' => '/images/logo.png',
        ]);
    }
}
