<?php

namespace Database\Seeders;

use App\Models\OurMenuPage;
use Illuminate\Database\Seeder;

class OurMenuPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OurMenuPage::updateOrCreate([
            'id'=>1,
        ],[
            'id'=>1,
            'hero_title'=>'Our Menu',
            'hero_bg_image'=>'our-menu/hero_bg_image.jpg',
        ]);
    }
}
