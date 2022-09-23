<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeders extends Seeder
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
            $name = $this->faker->name();
            DB::table('products')->insert([
                'name' => $name,
                'slug' => Str::slug($name, '-'),
                'price' => rand(500000, 5000000),
                'description' => $this->faker->text(),
                'image' => $this->faker->imageUrl(),
                'viewers' => rand(100, 1000),
                'id_category' => rand(1, 10),
                'status' => rand(0, 1),
                'created_at' => $this->faker->dateTime()
            ]);
        }
    }
}
