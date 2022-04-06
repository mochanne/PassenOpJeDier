<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class dbg_homeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'owner_id' => 1,
            'allowed_pet_types' => 'all',
            'locaion' => 'noordwijk',
            'description' => 'cool huis :3'
        ]);
        DB::table('homes')->insert([
            'owner_id' => 3,
            'allowed_pet_types' => 'cats',
            'locaion' => 'gaming zone',
            'description' => 'ik haat huizen >:['
        ]);    }
}
