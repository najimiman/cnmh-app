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
        return new Employe([
            'nom'=>[1],
            'prenom'=>[2],
            'email'=>[3],
            'telephone'=>[4],
            'adresse'=>[5],
            'date_naissance'=>[6],
            'cin'=>[7],
            'fonction_id'=>[8],
            'date_embauche'=>[9],
        ]);
    }
}
