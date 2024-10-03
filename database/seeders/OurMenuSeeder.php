<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OurMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'LAMB SHANK',
                'description' => 'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
                'serving' => '546kg',
                'image_path' => 'images/lamb_shank.jpg'
            ],
            [
                'title' => 'LAMB NECK',
                'description' => 'The Authentic smoked neck Meat, it comes with 14 sauce 7 salad and beverage of your choice',
                'serving' => '546kg',
                'image_path' => 'images/lamb_shank.jpg'
            ],
            [
                'title' => 'LAMB SHOULDER',
                'description' => 'The Authentic smoked Meat, it comes with 14 sauce 7 salad and beverage of your choice',
                'serving' => '546kg',
                'image_path' => 'images/lamb_shank.jpg'
            ],
            [
                'title' => 'LAMB RIBS',
                'description' => 'The finest smoked ribs, it comes with 14 sauce 7 salad and beverage of your choice',
                'serving' => '546kg',
                'image_path' => 'images/lamb_shank.jpg'
            ],
            [
                'title' => 'BEEF RIBS',
                'description' => 'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
                'serving' => '546kg',
                'image_path' => 'images/lamb_shank.jpg'
            ],
        ];

        DB::table('our_menus')->insert($data);
    }
}
