<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return Data|null
    */
    public function model(array $row)
    {
        return new Employee([
            'gender' => $row['gender'],
            'age' => $row['age'],
            'hypertension' => $row['hypertension'],
            'heart_disease' => $row['heart_disease'],
            'ever_married' => $row['ever_married'],
            'avg_glucose_level' => $row['avg_glucose_level'],
            'bmi' => $row['bmi'],
            'smoking_status' => $row['smoking_status'],
            'stroke' => $row['stroke']
        ]);
    }
}
