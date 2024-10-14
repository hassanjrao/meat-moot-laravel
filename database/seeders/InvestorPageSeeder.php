<?php

namespace Database\Seeders;

use App\Models\InvestorPage;
use Illuminate\Database\Seeder;

class InvestorPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InvestorPage::updateOrCreate([
            'id' => 1,
        ], [
            'id' => 1,
            'hero_title' => 'Investor',
            'hero_bg_image' => 'investor/hero_bg_image.jpg',
            'hero_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien. Nullam nec purus nec sapien ultrices ultricies. Nullam nec purus nec sapien ultrices ultricies. Nullam nec purus nec sapi',
        ]);
    }
}
