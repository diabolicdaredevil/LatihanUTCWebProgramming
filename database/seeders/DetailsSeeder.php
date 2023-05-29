<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailsSeeder extends Seeder
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
            Detail::create([
                'book_id' => $i,
                'author' => $faker->name(),
                'publisher' => $faker->company(),
                'year' => $faker->date($format='Y', $max='now'),
                'description' => $faker->sentence($nbWords = 30)
            ]);
        }
    }
}
