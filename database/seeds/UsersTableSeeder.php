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
        \App\Models\User::create([
            'name' => 'Son tung MTP',
            'email' => 'tungst20@gmail.com',
            'password' => bcrypt('tungst123'),
            'role' => \App\Models\User::ROLE_ADMIN,
        ]);
    }
}
