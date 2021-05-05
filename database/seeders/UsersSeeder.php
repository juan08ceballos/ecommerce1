<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'name' => 'user' . $i,
                'email' => $faker->email(),
                'email_verified_at' => $faker->dateTime($max = 'now', $timezone = null),
                'password' => $faker->password(),
                'remember_token' => $faker->numberBetween(680, 1080),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),

            ]);
        }
    }
}
