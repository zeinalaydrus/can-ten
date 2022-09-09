<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'title' => 'Makaroni',
            'description' => 'Makaroni merupakan salah satu pasta yang bentuknya seperti pipa kecil yang bengkok membentuk busur. Makaroni biasanya diolah dengan saus krim dan kacang polong.',
            'image' => 'macaroni.jpeg',
            'price' => '87000',
        ]);

        Food::create([
            'title' => 'Pizza',
            'description' => 'Piza adalah hidangan gurih asal Italia sejenis adonan bundar dan pipih, yang dipanggang di oven dan biasanya dilumuri saus tomat serta keju dengan bahan makanan tambahan lainnya yang bisa dipilih sesuai selera.',
            'image' => 'pizza.jpg',
            'price' => '120000',
        ]);

        Food::create([
            'title' => 'Burger',
            'description' => 'Hamburger adalah sejenis roti berbentuk bundar yang diiris dua, dan di tengahnya diisi dengan patty yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombai.',
            'image' => 'burger.webp',
            'price' => '460000',
        ]);

        Food::create([
            'title' => 'French Fries',
            'description' => 'Kentang goreng adalah hidangan yang dibuat dari potongan-potongan kentang yang digoreng dalam minyak goreng panas. Di dalam menu rumah-rumah makan.',
            'image' => 'french fries.jpg',
            'price' => '20000',
        ]);

        Food::create([
            'title' => 'Makaroni',
            'description' => 'Makaroni merupakan salah satu pasta yang bentuknya seperti pipa kecil yang bengkok membentuk busur. Makaroni biasanya diolah dengan saus krim dan kacang polong.',
            'image' => 'macaroni.jpeg',
            'price' => '65000',
        ]);

        Food::create([
            'title' => 'Pizza',
            'description' => 'Piza adalah hidangan gurih asal Italia sejenis adonan bundar dan pipih, yang dipanggang di oven dan biasanya dilumuri saus tomat serta keju dengan bahan makanan tambahan lainnya yang bisa dipilih sesuai selera.',
            'image' => 'pizza.jpg',
            'price' => '140000',
        ]);
    }
}
