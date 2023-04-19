<?php

namespace App\Imports;

use App\Models\Employe;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportEmployes implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $date_naissance = date('Y-m-d', strtotime($row[5]));
        $date_embauche = date('Y-m-d', strtotime($row[8]));
        return new Employe([
            'nom' => $row[0],
            'prenom' => $row[1],
            'email' => $row[2],
            'telephone' => $row[3],
            'adresse' => $row[4],
            'date_naissance' => $date_naissance,
            'cin' => $row[7],
            'date_embauche' => $date_embauche,
        ]);
    }
}
