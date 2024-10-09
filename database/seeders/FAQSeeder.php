<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
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
                'question' => 'Where is Meet Moot restaurant located?',
                'answer' => 'Meet Moot restaurant is located in the heart of the city, at 123 Main Street, New York, NY 10030.'
            ],
            [
                'question' => "Does Meat Moot's Resturants offer franchises or license the concept?",
                'answer' => "Yes, we do offer franchises and licenses. Please contact us at"
            ]
        ];

        FAQ::insert($data);
    }
}
