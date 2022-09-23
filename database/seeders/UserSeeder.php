<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Str; use Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->faker = \Faker\Factory::create();

        for ($i=1; $i <= 10 ; $i++) {
            DB::table('users')->insert([
                'username' => $this->faker->name(),
                'email' => $this->faker->unique()->safeEmail(),
                'phone' => rand(1234, 9087).''.rand(1234,2234),
                'password' => Str::random(8),
                'image' => $this->faker->imageUrl(),
                'birthday' => $this->faker->dateTime(),
                'role' => rand(0, 1),
            ]);
        }
    }
}
