<?php

namespace Database\Seeders;

use App\Models\FullCourseMeal;
use Illuminate\Database\Seeder;

class FullCourseMealSeeder extends Seeder
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
                'title' => '14 Sauce',
                'description' => 'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
                'image_path' => 'images/lamb_shank.jpg',
            ],
            [
                'title' => '7 SALAD AND APPETIZER',
                'description' => 'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
                'image_path' => 'images/lamb_shank.jpg',
            ],
            [
                'title' => 'RICE',
                'description' => 'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
                'image_path' => 'images/lamb_shank.jpg',
            ],
            [
                'title' => 'BEVERAGES',
                'description' => 'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
                'image_path' => 'images/lamb_shank.jpg',
            ],
        ];

        FullCourseMeal::insert($data);
    }
}
