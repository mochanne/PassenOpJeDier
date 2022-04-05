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
            'fname' => 'anne',
            'email' => 'mocchapi@gmail.com',
            'admin' => true,
            'password' => bcrypt('VerySecurePassword'),

        ]);
        DB::table('users')->insert([
            'fname' => 'average',
            'lname' => 'joe',
            'email' => 'gardengnostic@gmail.com',
            'password' => bcrypt('GamingIsReal'),
        ]);
        DB::table('users')->insert([
            'fname' => 'mean',
            'lname' => 'fella',
            'email' => 'gayrights@gmail.com',
            'blocked' => true,
            'password' => bcrypt('GamingIsReal'),
        ]);
    }
}
