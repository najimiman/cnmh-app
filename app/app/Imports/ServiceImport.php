<?php

namespace App\Imports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ServiceImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public $headingRow = null;

    public function model(array $row)
    {
        return new Service([
            'nom' => $row[0],
            'description' => $row[1],
        ]);
    }
    public function startRow():int{
        return 2;
    }
}
