<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) { 
            DB::table('orders')->insert([
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'state' => 'state' . $faker->numberBetween(1,5),
                'payment' => 'payment' . $faker->numberBetween(1,5),
                'final_price' => $faker->numberBetween(850000,6000000),
                'user_id' => $faker->numberBetween(1,50)
            ]);

        }
    }
}
