<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) { 
            DB::table('images')->insert([
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => $faker->imageUrl($width = $faker->numberBetween(680,1080), $height = $faker->numberBetween(680,1080)),
                'product_id' => $faker->numberBetween(1,50)
            ]);

        }
    }
}
