<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create("id-ID");
        for ($i=1; $i <= 10 ; $i++) { 
            User::create([
                "name" => $faker->name(),
                "email" => $faker->email(),
                "password" => Hash::make("12345")
            ]);
        }
    }
}
