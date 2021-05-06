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
            'url' => 'https://tienda.claro.com.co/wcsstore/Claro/images/catalog/equipos/646x1000/70035634.jpg',
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://i.linio.com/p/578f039ce52b7ef5210fee6d4392bd0d-product.webp',
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_615101-MLA45258081181_032021-O.webp',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://falabella.scene7.com/is/image/FalabellaCO/6596739_1?wid=1500&hei=1500&qlt=70',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_894510-MCO42808367117_072020-O.webp',
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_747151-MCO45324004319_032021-O.webp',
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://i.linio.com/p/f9e4838a19736ad05dabe150e720cd12-product.webp',
            'product_id' => 7,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://electrojaponesa.vteximg.com.br/arquivos/ids/178254-1000-1000/50UM73_3.jpg?v=637227482186670000',
            'product_id' => 8,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_794484-MCO44702434654_012021-O.webp',
            'product_id' => 9,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('images')->insert([
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_688747-MCO31825137438_082019-O.webp',
            'product_id' => 10,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
    }
}
