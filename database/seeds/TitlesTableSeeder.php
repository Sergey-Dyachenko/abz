<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TitlesTableSeeder extends Seeder
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
            DB::table('title')->insert([
                'title' => $faker->jobTitle
             ]);

        }

    }

}