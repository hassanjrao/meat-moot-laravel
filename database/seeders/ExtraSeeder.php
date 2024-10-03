<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtraSeeder extends Seeder
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
                'title' => 'Ultimate Free Source',
                'description' => 'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
            ],
            [
                'title' => 'Ultimate Salad and Apitizer',
                'description' => 'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
            ],
            [
                'title'=>'Ultimate Free rice',
                'description'=>'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
            ],
            [
                'title'=>'Ultimate Free Drink',
                'description'=>'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
            ],
            [
                'title'=>'Ultimate Free Dessert',
                'description'=>'The finest and tasties smoked shank, it comes with 14 sauce 7 salad and beverage of your choice',
            ],
        ];

        DB::table('extras')->insert($data);
    }
}
