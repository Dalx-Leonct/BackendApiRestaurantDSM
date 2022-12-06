<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            'nTable'=>'1'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'2'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'3'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'4'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'5'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'6'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'7'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'8'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'9'
        ]);
        DB::table('tables')->insert([
            'nTable'=>'10'
        ]);

    }
}
