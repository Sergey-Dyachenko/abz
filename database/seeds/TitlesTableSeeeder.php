<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //
            DB::table('titles')->insert([
                'employee_id' => '2',
                'title' => 'manager',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('titles')->insert([
                'employee_id' => '1',
                'title' => 'analytic',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('employees')->insert([
                'employee_id' => '1',
                'title' => 'developer',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }

}
