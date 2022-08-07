<?php

namespace Database\Seeders;

use App\Models\food;
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
            'image' => 'post-image/EcIiDIrcT1RTMlJPYI65kPwYylKiSMjSGhUm96GP.jpg',
            'rating_star' => '5'
        ]);

        Food::create([
            'title' => 'Pizza',
            'description' => 'Piza adalah hidangan gurih asal Italia sejenis adonan bundar dan pipih, yang dipanggang di oven dan biasanya dilumuri saus tomat serta keju dengan bahan makanan tambahan lainnya yang bisa dipilih sesuai selera.',
            'image' => 'post-image/jyjDo7fWdN9RnTsuG2lSDuufCsgHH2H5KiwcsHOG.jpg',
            'rating_star' => '5'
        ]);

        Food::create([
            'title' => 'Burger',
            'description' => 'Hamburger adalah sejenis roti berbentuk bundar yang diiris dua, dan di tengahnya diisi dengan patty yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombai.',
            'image' => 'post-image/dOrEzZmBevBJ0yQP6X7NeYVRbjoKhJPiJWGBQWpM.webp',
            'rating_star' => '5'
        ]);

        Food::create([
            'title' => 'French Fries',
            'description' => 'Kentang goreng adalah hidangan yang dibuat dari potongan-potongan kentang yang digoreng dalam minyak goreng panas. Di dalam menu rumah-rumah makan.',
            'image' => 'post-image/m5MNm7oUef5pJlUg1FBNOsb4qLSZ261m6IW2Sfp5.jpg',
            'rating_star' => '5'
        ]);

        Food::create([
            'title' => 'Makaroni',
            'description' => 'Makaroni merupakan salah satu pasta yang bentuknya seperti pipa kecil yang bengkok membentuk busur. Makaroni biasanya diolah dengan saus krim dan kacang polong.',
            'image' => 'post-image/EcIiDIrcT1RTMlJPYI65kPwYylKiSMjSGhUm96GP.jpg',
            'rating_star' => '5'
        ]);

        Food::create([
            'title' => 'Pizza',
            'description' => 'Piza adalah hidangan gurih asal Italia sejenis adonan bundar dan pipih, yang dipanggang di oven dan biasanya dilumuri saus tomat serta keju dengan bahan makanan tambahan lainnya yang bisa dipilih sesuai selera.',
            'image' => 'post-image/jyjDo7fWdN9RnTsuG2lSDuufCsgHH2H5KiwcsHOG.jpg',
            'rating_star' => '5'
        ]);
    }
}
