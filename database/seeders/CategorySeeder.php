<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // if (!DB::table('categories')->first()) 
            DB::table('categories')->insert([
                // ['name' => '野菜'],
                // ['name' => 'たんぱく質'],
                // ['name' => '炭水化物'],
                ['id' => '1', 'name' => '野菜'],
                ['id' => '2', 'name' => 'タンパク質'],
                ['id' => '3', 'name' => '炭水化物'],
            ]);
    }
}
