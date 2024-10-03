<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuHighlightSeeder extends Seeder
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
                'title' => 'Lamb Shoulder',
                'description' => 'When shoulder meat is this awesome, keep the seasoning vivid. Smoked authentic meat accordingly to a delicious recipe, seasoned with coarse salt and fleshly grounded black pepper. You can also add honey to make it palpable with extras served on the side in accordance with your freshly gourmet palate.',
                'image_path' => 'menu_highlights/lamb_shoulder.jpg'
            ],
            [
                'title' => 'Beef Brisket',
                'description' => 'Savor the exquisite smoked brisket at Meat Moot, which is made from premium quality meat and served with a delectable blend of spicy sauce and garlic yogurt. Our chefs take great care in crafting this dish, skillfully highlighting the natural flavors of the meat and providing a truly delightful dining experience.',
                'image_path' => 'menu_highlights/lamb_shoulder.jpg'
            ],
            [
                'title' => 'Lamb Ribs',
                'description' => 'When shoulder meat is this awesome, keep the seasoning vivid. Smoked authentic meat seasoned with coarse salt and freshly grounded meat.',
                'image_path' => 'menu_highlights/lamb_shoulder.jpg'
            ],
            [
                'title' => 'Beef Ribs',
                'description' => 'When shoulder meat is this awesome, keep the seasoning vivid. Smoked authentic meat accordingly to a delicious recipe, seasoned with coarse salt and fleshly grounded black pepper. You can also add honey to make it palpable with extras served on the side in accordance with your freshly gourmet palate.',
                'image_path' => 'menu_highlights/lamb_shoulder.jpg'
            ],
            [
                'title' => 'Lamb Shank',
                'description' => 'When shoulder meat is this awesome, keep the seasoning vivid. Smoked authentic meat accordingly to a delicious recipe, seasoned with coarse salt and fleshly grounded black pepper. You can also add honey to make it palpable with extras served on the side in accordance with your freshly gourmet palate.',
                'image_path' => 'menu_highlights/lamb_shoulder.jpg'
            ]

        ];

        DB::table('menu_highlights')->insert($data);
    }
}
