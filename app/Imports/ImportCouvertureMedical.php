<?php

namespace App\Imports;

use App\Models\couvertureMedical;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCouvertureMedical implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new couvertureMedical([
            'nom' => $row[1],
            'description' => $row[2],
        ]);
    }
}
