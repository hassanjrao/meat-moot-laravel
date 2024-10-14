<?php

namespace Database\Seeders;

use App\Models\MenuPage;
use Illuminate\Database\Seeder;

class MenuPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuPage::updateOrCreate([
            'id'=>1,
        ],[
            'id'=>1,
            'hero_title'=>'The Menu',
            'hero_bg_image'=>'menu/hero_bg_image.jpg',
            'tagline'=>'Every bite is a wholesome experience! You cannot resist the taste of the smoked flavors.',
        ]);
    }
}
