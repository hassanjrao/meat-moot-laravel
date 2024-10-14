<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomePage::updateOrCreate([
            'id'=>1,
        ],[
            'id'=>1,
            'hero_title'=>'The Real Taste of Smoked Meat & a Unique Adventure Awaits',
            'hero_bg_video'=>'/images/hero-bg.jpg',

            'concept_heading'=>'Menu Concept',
            'concept_subheading'=>'The unique Taste',
            'concept_description'=>'What distinguishes our menu and the concept behind it are the modern interpretations of familiar dishes and flavor combinations they create, resulting in unique tastes, innovative presentations, and a distinctive Quality Meats style.',
            'concept_image'=>'/images/concept.jpg',

            'ceo_message'=>'At Laravel, we give you the kingly presentation of great meat garnished with a world-class recipe that will always leave you wanting more.',
            'ceo_location'=>'Istanbul Headquarters CEO',

            'connect_heading'=>'WE ARE GROWING EVERY DAY',
            'connect_subheading'=>'Hankering For More Information About Having Your Own Laravel Restaurant?',
            'connect_bg_image'=>'/images/connect-bg.jpg',
            'connect_message'=>'The success of our franchisees drives us.',

            'celebrate_heading'=>'Celebrities Favorite Meat Restaurant',
            'celebrate_subheading'=>'Each of our meals has its own unique story that we want to share with you.',
            'celebrate_images'=>json_encode([
                '/images/celebrate-1.jpg',
                '/images/celebrate-2.jpg',
                '/images/celebrate-3.jpg',
                '/images/celebrate-4.jpg',
            ]),

        ]);
    }
}
