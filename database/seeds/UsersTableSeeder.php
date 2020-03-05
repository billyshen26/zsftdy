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
//        \App\User::truncate();

        $faker = \Faker\Factory::create();

        $password = \Illuminate\Support\Facades\Hash::make('password');

        \App\User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => $password
        ]);
        \App\User::create([
            'name' => 'editor',
            'email' => 'editor@test.com',
            'password' => $password
        ]);
        \App\User::create([
            'name' => 'writer',
            'email' => 'writer@test.com',
            'password' => $password
        ]);
        \App\User::create([
            'name' => 'reader',
            'email' => 'reader@test.com',
            'password' => $password
        ]);

    }
}
