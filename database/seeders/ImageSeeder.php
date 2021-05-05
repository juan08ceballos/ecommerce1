<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
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
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_902890-MCO43545236696_092020-O.webp',
            'product_id' => 73,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://www.mac-center.com/ccstore/v1/images/?source=/file/v5339779933333581787/products/iPhone_11_blanco.jpg&height=475&width=475',
            'product_id' => 74,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_627691-MCO44786164610_022021-O.webp',
            'product_id' => 75,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_654452-MCO44583466924_012021-O.webp',
            'product_id' => 76,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_895108-MCO41065872997_032020-O.webp',
            'product_id' => 77,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_747151-MCO45324004319_032021-O.webp',
            'product_id' => 78,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://i.linio.com/p/2135ecb40c256f752a749bdcdbabb2d9-product.webp',
            'product_id' => 79,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://i.linio.com/p/4243a6c7c96ebe2c32b8a29e4a1a6d95-product.webp',
            'product_id' => 80,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_869825-MCO31354317827_072019-O.webp',
            'product_id' => 81,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://importacionesarturia.com/wp-content/uploads/2016/09/Sony-MDR-7506-PgBlanca.jpg',
            'product_id' => 82,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
    }
}
