<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Products_has_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 73,
            'category_id' => 51
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 74,
            'category_id' => 51
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 75,
            'category_id' => 52
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 76,
            'category_id' => 52
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 77,
            'category_id' => 53
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 78,
            'category_id' => 53
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 79,
            'category_id' => 54
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 80,
            'category_id' => 54
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 81,
            'category_id' => 55
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'product_id' => 81,
            'category_id' => 55
        ]);
    }
}
