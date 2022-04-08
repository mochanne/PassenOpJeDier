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
            'name' => 'Anne Groenewoud',
            'email' => 'mocchapi@gmail.com',
            'admin' => true,
            'password' => bcrypt('VerySecurePassword'),

        ]);
        DB::table('users')->insert([
            'name' => 'Average Joe',
            'email' => 'gardengnostic@gmail.com',
            'password' => bcrypt('GamingIsReal'),
            'avatar' => '/cdn/upload/img/avatar/41827045cc75e04ae0dbd5096bdffb0f.gif'
        ]);
        DB::table('users')->insert([
            'name' => 'Bob Jammes',
            'email' => 'abcdefhijklmnop@cool.com',
            'password' => bcrypt('vriskareal'),
            'avatar' => '/cdn/upload/img/avatar/66e75262ceafd1700cb0fa127568dd5b.jpg'
        ]);
        DB::table('users')->insert([
            'name' => 'Penny Snapcube',
            'email' => 'jeff@amazon.com',
            'password' => bcrypt('12345678'),
            'avatar' => '/cdn/upload/img/avatar/2b8a293f2900ad05f6aa375248f1124d.png'
        ]);
        DB::table('users')->insert([
            'name' => 'Mean Fella',
            'email' => 'gayrights@gmail.com',
            'blocked' => true,
            'password' => bcrypt('GamingIsFake'),
            'avatar' => '/cdn/upload/img/avatar/82a164fb9164925e64bff50a0c97bc6d.png'
        ]);
        DB::table('users')->insert([
            'name' => 'Steve Guy',
            'email' => 'support@bol.com',
            'password' => bcrypt('OculusQuest2'),
            'avatar' => '/cdn/upload/img/avatar/345fa3135ab300017dbcf2a469ed0520.jpg'
        ]);

    }
}
