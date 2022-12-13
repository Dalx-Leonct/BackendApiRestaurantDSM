<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_orders')->insert([
            ['order_id' => '1',
            'product_id' => '1',
            'quantity' => '7'],

            ['order_id' => '2',
            'product_id' => '4',
            'quantity' => '4'],

            ['order_id' => '5',
            'product_id' => '6',
            'quantity' => '2'],
            
            ['order_id' => '4',
            'product_id' => '2',
            'quantity' => '1'],

            ['order_id' => '4',
            'product_id' => '1',
            'quantity' => '3'],

            ['order_id' => '3',
            'product_id' => '4',
            'quantity' => '4'],

            ['order_id' => '3',
            'product_id' => '2',
            'quantity' => '8'],
            
            ['order_id' => '5',
            'product_id' => '5',
            'quantity' => '1']
        ]);
    }
}
