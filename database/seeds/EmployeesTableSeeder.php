<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
       foreach (range(1,100) as $index){
           DB::table('employees')->insert([
               'first_name' => $faker->firstName,
               'last_name' => $faker->lastName,
               'hire_date' =>  $faker->date(),
               'title_id' => $faker->numberBetween(1,20)
           ]);
       }
    }
}
