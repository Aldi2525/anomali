<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("rahasia"),
        ]);
    }
}