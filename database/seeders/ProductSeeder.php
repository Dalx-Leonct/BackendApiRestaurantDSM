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
            'description' => 'Sin descripcion',
            'price' => 1000,
            'stock' => 10,
            'codProduct' => '1q2w3e41',
            'image' => 'x',
            'category_id' => 1, //Cat: Entradas
        ]);

        DB::table('products')->insert([
            'name' => 'Papas Fritas',
            'description' => 'Sin descripcion',
            'price' => 1000,
            'stock' => 10,
            'codProduct' => '1q2w3e42',
            'image' => 'x',
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Lomo a lo pobre',
            'description' => 'Sin descripcion',
            'price' => 1000,
            'stock' => 10,
            'codProduct' => '1q2w3e43',
            'image' => 'x',
            'category_id' => 2, //Cat: Fondos
        ]);

        DB::table('products')->insert([
            'name' => 'Risotto de tocino',
            'description' => 'Sin descripcion',
            'price' => 1000,
            'stock' => 10,
            'codProduct' => '1q2w3e44',
            'image' => 'x',
            'category_id' => 2, 
        ]);

        DB::table('products')->insert([
            'name' => 'Helado de Chocolate Suizo',
            'description' => 'Sin descripcion',
            'price' => 1000,
            'stock' => 10,
            'codProduct' => '1q2w3e45',
            'image' => 'x',
            'category_id' => 3, //Cat: Postres
        ]);

        DB::table('products')->insert([
            'name' => 'Pepsi',
            'description' => 'Sin descripcion',
            'price' => 1000,
            'stock' => 10,
            'codProduct' => '1q2w3e46',
            'image' => 'x',
            'category_id' => 4, //Cat: Bebidas
        ]);//
    }
}
