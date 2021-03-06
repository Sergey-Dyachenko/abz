<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $index){
            DB::table('titles')->insert([
                'title' => $faker->jobTitle
            ]);

        }

    }
}
