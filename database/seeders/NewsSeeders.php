<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeders extends Seeder
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
            $title = $this->faker->unique()->sentence($nbWords = 6, $variableNbWords = true);
            DB::table('news')->insert([
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'content' => $this->faker->text(),
                'image' => $this->faker->imageUrl(),
                'status' => rand(0, 1),
                'created_at' => $this->faker->dateTime(),
            ]);
        }
    }
}
