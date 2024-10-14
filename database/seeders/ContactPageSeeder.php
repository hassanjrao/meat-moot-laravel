<?php

namespace Database\Seeders;

use App\Models\ContactPage;
use Illuminate\Database\Seeder;

class ContactPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactPage::updateOrCreate([
            'id'=>1,
        ],[
            'id'=>1,
            'hero_title'=>'Contact Us',
            'hero_bg_image'=>'contact/hero_bg_image.jpg',
        ]);
    }
}
