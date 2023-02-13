<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'gender' => 'male',
            'age' => '42',
            'hypertension' => '0',
            'heart_disease' => '1',
            'ever_married' => 'No',
            'avg_glucose_level' => '228.69',
            'bmi' => '36.6',
            'smoking_status' => 'Unknown',
            'stroke' => '0',
        ]);


    }
}
