<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'username' => 'admin',
            'name' => 'Admin',
            'nid' => '123456789',
            'email' => 'admin@email.com',
            'password' => bcrypt('22222222'),
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'username' => 'rentgiver',
            'name' => 'Rent Giver',
            'nid' => '123456790',
            'email' => 'rentgiver@email.com',
            'password' => bcrypt('3333333'),
        ]);
        DB::table('users')->insert([
            'role_id' => 3,
            'username' => 'renttaker',
            'name' => 'Rent Taker',
            'nid' => '123456791',
            'email' => 'renttaker@email.com',
            'password' => bcrypt('4444444'),
        ]);
    }
}
