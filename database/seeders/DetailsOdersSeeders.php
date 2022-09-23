<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsOdersSeeders extends Seeder
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
            DB::table('details_orders')->insert([
                'id_orders' => rand(1, 50),
                'note' => $this->faker->text(),
                'status' => rand(0, 3),
                'address' => $this->faker->company(),
                'total' => rand(1000000, 10000000),
            ]);
        }
    }
}
