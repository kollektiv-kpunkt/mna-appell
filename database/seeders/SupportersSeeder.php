<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SupportersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("de_DE");
        DB::table("supporters")->truncate();
        for ($i = 0; $i < rand(500,800); $i++) {
            \App\Models\Supporter::create([
                "name" => $faker->name,
                "email" => $faker->email,
                "city" => $faker->city,
                "zip" => $faker->postcode,
                "optin" => $faker->boolean,
                "enabled" => true,
                "public" => true,
                "hash" => Str::random(64)
            ]);
        }
    }
}
