<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'category'=>'Romance'
        ]);

        Category::create([
            'category'=>'Action'
        ]);

        Category::create([
            'category'=>'Comedy'
        ]);

        Category::create([
            'category'=>'Non-fiction'
        ]);

        Category::create([
            'category'=>'Comic'
        ]);
    }
}
