<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset The users Table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 3 users/author
        DB::table('users')->insert([
        [
            'name' => "Ashik Chowdhury",
            'email' => "ashik@gmail.com",
            'password' => bcrypt('secret')
        ],
        [
            'name' => "Nokib Chowdhury",
            'email' => "nokib@gmail.com",
            'password' => bcrypt('secret')
        ],
        [
            'name' => "Alamgir Chowdhury",
            'email' => "alamgir@gmail.com",
            'password' => bcrypt('secret')
        ],

        ]);
    }
}
