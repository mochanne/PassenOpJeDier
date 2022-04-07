<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class dbg_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'anne Groenewoud',
            'email' => 'mocchapi@gmail.com',
            'admin' => true,
            'password' => bcrypt('VerySecurePassword'),

        ]);
        DB::table('users')->insert([
            'name' => 'average Joe',
            'email' => 'gardengnostic@gmail.com',
            'password' => bcrypt('GamingIsReal'),
        ]);
        DB::table('users')->insert([
            'name' => 'mean fella',
            'email' => 'gayrights@gmail.com',
            'blocked' => true,
            'password' => bcrypt('GamingIsFake'),
        ]);
    }
}
