<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'name' => 'Keyboard RGB',
            'file' => 'https://i0.wp.com/res.cloudinary.com/db7dfhvjr/image/upload/v1527251677/Gaming%20Keyboard/G.SKILL_RIPJAWS_KM780_RGB.jpg?resize=640%2C480&ssl=1',
            'enable' => true,
        ]);    
        Image::create([
            'name' => 'Gelas',
            'file' => 'https://image1ws.indotrading.com/s3/productimages/webp/co205354/p923575/w425-h425/158e7651-01ba-40b3-a9d1-ab5595c70b90.png',
            'enable' => true,
        ]);    
        Image::create([
            'name' => 'Gamis Semi Tunik',
            'file' => 'https://evermos.com/home/wp-content/uploads/2022/10/gamis-semi-tunik-dengan-lengan-puff_inspirasi-model-baju-anak-perempuan-terbaru_tampil-modis-dengan-7-model-baju-anak-perempuan-terbaru-berikut.png',
            'enable' => true,
        ]); 
    }
}
