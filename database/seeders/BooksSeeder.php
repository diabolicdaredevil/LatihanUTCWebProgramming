<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = faker::create('id_ID');

        for($i = 1 ; $i <= 50 ; $i++ ){
            Book::create([
                'category_id' => rand(1, 4),
                'title' => $faker->sentence(3)
            ]);
        }
    }
}
