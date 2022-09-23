<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeders extends Seeder
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
            $name = $this->faker->unique()->name();
            DB::table('categories')->insert([
                'name' => $name,
                'slug' => Str::slug($name, '-'),
                'image' => $this->faker->imageUrl(),
                'created_at' => $this->faker->dateTime(),
            ]);
        }
    }
}
