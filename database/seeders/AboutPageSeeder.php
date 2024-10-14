<?php

namespace Database\Seeders;

use App\Models\AboutPage;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutPage::updateOrCreate([
            'id'=>1,
        ],[
            'id'=>1,
            'hero_title'=>'About Us',
            'hero_bg_image'=>'about/hero_bg_image.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien. Nullam nec purus nec sapien ultrices ultricies. Nullam nec purus nec sapien ultrices ultricies. Nullam nec purus nec sapi',
            'image'=>'about/image.jpg',
            'history_heading'=>'Our History',
            'history_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien. Nullam nec purus nec sapien ultrices ultricies. Nullam nec purus nec sapien ultrices ultricies. Nullam nec purus nec sapi',
            'about_images'=>json_encode([
                'about/about-1.jpg',
                'about/about-2.jpg',
                'about/about-3.jpg',
                'about/about-4.jpg',
            ]),
            'atmosphere_heading'=>'Atmosphere',
            'atmosphere_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien. Nullam nec purus nec sapien ultrices ultricies. Nullam nec purus nec sapien ultrices ultricies. Nullam nec purus nec sapi',
            'atmosphere_bg_image'=>'about/atmosphere_bg_image.jpg',
            'recommendated_by_images'=>json_encode([
                'about/recommendated_by-1.jpg',
                'about/recommendated_by-2.jpg',
                'about/recommendated_by-3.jpg',
                'about/recommendated_by-4.jpg',
            ]),
            'celebrate_images'=>json_encode([
                'about/celebrate-1.jpg',
                'about/celebrate-2.jpg',
                'about/celebrate-3.jpg',
                'about/celebrate-4.jpg',
            ]),
        ]);
    }
}
