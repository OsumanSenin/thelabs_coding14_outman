<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "El bazzouna outman",
            "email" => "admin@outman.com",
            "password" => Hash::make("outman123"),
            "role_id" => 1,
            "photo"=> "",
            "created_at" => now()
        ]);
    }
}
