<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ViewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('views')->insert([
            
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'view' => 'excelente producto',
            'product_id' => 1,
            'user_id' => 2,
            'calification' => 3
        ]);
        DB::table('views')->insert([
            
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'view' => 'rápido el envío',
            'product_id' => 1,
            'user_id' => 10,
            'calification' => 4
        ]);
        DB::table('views')->insert([
            
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'view' => 'buena calidad',
            'product_id' => 2,
            'user_id' => 13,
            'calification' => 5
        ]);
        DB::table('views')->insert([
            
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'view' => 'buena garantía',
            'product_id' => 2,
            'user_id' => 30,
            'calification' => 2
        ]);
        DB::table('views')->insert([
            
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'view' => 'muchas gracias',
            'product_id' => 3,
            'user_id' => 8,
            'calification' => 3
        ]);
        DB::table('views')->insert([
            
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'view' => 'lo recomiendo',
            'product_id' => 3,
            'user_id' => 26,
            'calification' => 4
        ]);
    }
}
