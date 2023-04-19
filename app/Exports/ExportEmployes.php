<?php

namespace App\Exports;

use App\Models\Employe;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportEmployes implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employe::select(
            'id',
            'nom',
            'prenom',
            'email',
            'telephone',
            'adresse',
            'date_naissance',
            'cin',
            'date_embauche',
        )->get();
    }
}
