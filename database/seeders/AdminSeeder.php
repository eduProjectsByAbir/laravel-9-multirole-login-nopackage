<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin id
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password is 'password'
            'is_admin' => true
        ]);
        // test user id
        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password is 'password'
            'is_admin' => false
        ]);
    }
}
