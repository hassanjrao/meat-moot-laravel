<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            // UserSeeder::class,
            // MenuHighlightSeeder::class,
            // OurMenuSeeder::class,
            // FullCourseMealSeeder::class,
            // ExtraSeeder::class,
            // SettingSeeder::class,
            // FAQSeeder::class,
            HomePageSeeder::class,
            AboutPageSeeder::class,
        ]);
    }
}
