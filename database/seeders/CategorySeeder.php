<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Alat Masak',
            'enable' => true,
        ]);    
        Category::create([
            'name' => 'PC Gaming',
            'enable' => true,
        ]);    
        Category::create([
            'name' => 'Baju Anak',
            'enable' => true,
        ]); 
    }
}
