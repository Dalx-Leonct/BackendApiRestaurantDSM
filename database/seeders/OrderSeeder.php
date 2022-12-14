<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['codeOrder' => '9i8u7y5', 'total' => '4000', 'tables_id' => '1', 'orderStatus' => 'Waiting', 'minutes' => '0', 'seconds' => '0'],
            ['codeOrder' => '9i8u7y4', 'total' => '7000', 'tables_id' => '2', 'orderStatus' => 'Waiting', 'minutes' => '0', 'seconds' => '0'],
            ['codeOrder' => '9i8u7y3', 'total' => '12000', 'tables_id' => '3', 'orderStatus' => 'Waiting', 'minutes' => '0', 'seconds' => '0'],
        ]);
    }
}
