<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        DB::table('products')->insert([
            'name' => 'Xiamo Redmi 9',
            'description' => '64gb 4g. Ram',
            'price' => 615000,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 30,
            'video' => 'https://www.youtube.com/watch?v=bQCi4oU6i2A',
            'discount' => 15
        ]);
        DB::table('products')->insert([
            'name' => 'Iphone 10',
            'description' => 'Un nuevo sistema de dos cámaras. Una batería para todo el día. El vidrio más resistente en un smartphone. Y el chip más rápido de Apple.
            Seis nuevos colores increíbles.',
            'price' => 2900000,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 40,
            'video' => 'https://www.youtube.com/watch?v=fZLXMawJG4o',
            'discount' => 16
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy Tab A7',
            'description' => 'Con un diseño delgado, un sistema de entretenimiento vibrante y un rendimiento excepcional, el nuevo A7 es un nuevo compañero elegante para tu vida.',
            'price' => 795900,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 55,
            'video' => 'https://www.youtube.com/watch?v=ZGgFEk5Cvzk',
            'discount' => 18
        ]);
        DB::table('products')->insert([
            'name' => 'Tablet Lenovo M10 Plus',
            'description' => 'Aspecto y tacto premium con cubierta trasera de metal y biseles delgados y estrechos. Disfruta de tus vídeos favoritos en el 10. Pantalla FHD de 3 pulgadas con tecnología TDDI.',
            'price' => 725000,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 77,
            'video' => 'https://www.youtube.com/watch?v=5eDvRKyw1gk',
            'discount' => 13
        ]);
        DB::table('products')->insert([
            'name' => 'Cable Hdmi 3 Metros Doble Filtro',
            'description' => 'Cable de alta definición tipo A de alta calidad
            Conexión de equipos de audio/video que reproducen señal de alta definición',
            'price' => 7500,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 83,
            'video' => 'No video',
            'discount' => 9
        ]);
        DB::table('products')->insert([
            'name' => 'Cargador Huawei Micro Usb Carga Rápida',
            'description' => 'Original, excelente calidad, Salida / 3A',
            'price' => 25000,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 100,
            'video' => 'https://www.youtube.com/watch?v=N0l4_1lUpk0',
            'discount' => 0
        ]);
        DB::table('products')->insert([
            'name' => 'Televisor 43" Crystal UHD 4K Smart TV 2020 43TU6900',
            'description' => 'Motor de imágenesCrystal Processor 4K Índice de movimiento MR120 PQI (Índice de calidad de la imagen)2000 HDR (Alto rango dinámico)HDR HDR 10+Yes HLG (Registro híbrido Gamma) Yes',
            'price' => 1399900,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 95,
            'video' => 'https://www.youtube.com/watch?v=FtfubrQ3V0M',
            'discount' => 20
        ]);
        DB::table('products')->insert([
            'name' => 'Televisor Lg 50 Pulgas (127 Cm) Smart Led 4K Ultra Hd Lg',
            'description' => 'Tamaño diagonal de pantalla en cm=80 cm-Sintonizador TDT=Sí-Control por movimiento=No-Accesorios incluidos=Cable De Poder-Hecho en=México-Marca=LG',
            'price' => 2199900,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 150,
            'video' => 'https://www.youtube.com/watch?v=BhVD9qcoK_c',
            'discount' => 18
        ]);
        DB::table('products')->insert([
            'name' => 'Equipo De Audio Sony Para Fiesta Con Bluetooth - Mhc-v02',
            'description' => 'Lleva tus fiestas a otro nivel con este potente sistema de sonido compacto.',
            'price' => 629000,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 53,
            'video' => 'https://www.youtube.com/watch?v=IkCg8630N-Q',
            'discount' => 17
        ]);
        DB::table('products')->insert([
            'name' => 'Sony MDR-7506 Audífonos',
            'description' => 'El MDR-7506 es un elemento básico dentro de las arenas de grabación, cine y en vivo.',
            'price' => 429900,
            'available' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'stock' => 90,
            'video' => 'https://www.youtube.com/watch?v=8Buk3Z8W9Pg&t=2s',
            'discount' => 10
        ]);
    }
}
