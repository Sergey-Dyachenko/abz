<?php

use Illuminate\Database\Seeder;

class SalarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salaris')->insert([
            'employee_id' => '3',
            'salary' => 20000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaris')->insert([
            'employee_id' => '2',
            'salary' => 30000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaris')->insert([
            'employee_id' => '1',
            'salary' => 35000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
     }
}
