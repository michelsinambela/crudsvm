<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return Data|null
    */
    public function model(array $row)
    {

        return new Data([
            'gender' => $row['gender'],
            'age' => $row['age'],
            'hypertension' => ['hypertension'],
            'heart_disease' => ['heart_disease'],
            'ever_married' => ['ever_married'],
            'avg_glucose_level' => ['avg_glucose_level'],
            'bmi' => ['bmi'],
            'smoking_status' => ['smoking_status'],
            'stroke' => ['stroke']
        ]);
    }
}
