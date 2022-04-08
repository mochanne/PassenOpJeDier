<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class petTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet_types')->insert([
            'type' => 'cat',
            'plural' => 'cats'
        ]);
        DB::table('pet_types')->insert([
            'type' => 'dog',
            'plural' => 'dogs'
        ]);
        DB::table('pet_types')->insert([
            'type' => 'fish',
            'plural' => 'fishes'
        ]);
    }
}
