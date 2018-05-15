<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'first_name' => 'elena',
            'last_name' => 'dyachenko',
            'hire_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('employees')->insert([
            'first_name' => 'sergey',
            'last_name' => 'tkachenko',
            'hire_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('employees')->insert([
            'first_name' => 'oleg',
            'last_name' => 'petrennko',
            'hire_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
