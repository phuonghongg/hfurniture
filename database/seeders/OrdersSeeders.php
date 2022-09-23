<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeders extends Seeder
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



        for ($i=1; $i <= 50 ; $i++) {
            DB::table('orders')->insert([
                'id_product' => rand(1, 50),
                'id_user' => rand(1, 10),
                'created_at' => $this->faker->dateTime()
            ]);
        }
    }
}
