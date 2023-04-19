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
            'nom'=>[0],
            'prenom'=>[1],
            'email'=>[2],
            'telephone'=>[3],
            'adresse'=>[4],
            'date_naissance'=>[5],
            'cin'=>[6],
            'date_embauche'=>[7],
        ]);
    }
}
