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
        DB::table('users')->insert([
            'name' => 'Kushwaha Pooja',
            'email' => 'admin@gmail.com',
        	'password' => bcrypt('admin123'),
        	'is_admin' => true,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        DB::table('users')->insert([
            'name' => 'devangi vasara',
            'email' => 'admin@site.com',
            'password' => bcrypt('admin123'),
            'is_admin' => false,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);



    }
}
