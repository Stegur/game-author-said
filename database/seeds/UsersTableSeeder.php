<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'admin',
            'is_admin' => true,
            'email' => 'admin@admin.com',
            'password' => bcrypt('a123456')
        ]);

        DB::table('users')->insert([
            'name' => 'gamer1',
            'email' => 'gamer1@play.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'gamer2',
            'email' => 'gamer2@play.com',
            'password' => bcrypt('123456')
        ]);
    }
}
