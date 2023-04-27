<?php

namespace App\Imports;

use App\Models\Employe;
use App\Models\Fonction;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportEmployes implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $date_naissance = date('Y-m-d', strtotime($row[5]));
        $date_embauche = date('Y-m-d', strtotime($row[7]));
        $fonction = Fonction::where('nom',$row[8])->get();
        return new Employe([
            'nom' => $row[0],
            'prenom' => $row[1],
            'email' => $row[2],
            'telephone' => $row[3],
            'adresse' => $row[4],
            'date_naissance' => $date_naissance,
            'cin' => $row[6],
            'date_embauche' => $date_embauche,
            'fonction_id' => $fonction[0]->id,
        ]);
    }
    public function startRow(): int
    {
        return 2; // Start importing from row 2, skipping the first row
    }
}
