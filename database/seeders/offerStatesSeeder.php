<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
// use DB;

class offerStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('offer_states')->insert([
            'state' => 'open'
        ]);
        \DB::table('offer_states')->insert([
            'state' => 'expired'
        ]);
        \DB::table('offer_states')->insert([
            'state' => 'completed'
        ]);
        \DB::table('offer_states')->insert([
            'state' => 'closed'
        ]);
    }
}
