<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Empanadas',
            'description' => 'Empanadas sureñas',
            'price' => 4000,
            'stock' => 10,
            'codProduct' => '1q2w3e41',
            'image' => 'https://t2.rg.ltmcdn.com/es/posts/7/5/6/empanada_chilena_de_carne_11657_600_square.jpg',
            'category_id' => 1, //Cat: Entradas
        ]);

        DB::table('products')->insert([
            'name' => 'Papas Fritas',
            'description' => 'Papas fritas familiares',
            'price' => 7000,
            'stock' => 10,
            'codProduct' => '1q2w3e42',
            'image' => 'https://cdnx.jumpseller.com/elmonarcarengo-gmail-com/image/3895604/_572_369_1288208.jpg?1600711274',
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Lomo a lo pobre',
            'description' => 'Lomo a lo pobre con huevo',
            'price' => 12000,
            'stock' => 10,
            'codProduct' => '1q2w3e43',
            'image' => 'https://www.comedera.com/wp-content/uploads/2022/06/Lomo-a-lo-pobre-shutterstock_1718731168.jpg',
            'category_id' => 2, //Cat: Fondos
        ]);

    }
}
