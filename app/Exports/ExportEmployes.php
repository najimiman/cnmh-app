<?php

namespace App\Exports;

use App\Models\Employe;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportEmployes implements FromCollection ,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employe::select(
            'nom',
            'prenom',
            'email',
            'telephone',
            'adresse',
            'date_naissance',
            'fonction_id',
            'cin',
            'date_embauche'
        )->get();
    }
    public function headings(): array
    {
        return [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'date_naissance',
        'fonction_id',
        'cin',
        'date_embauche'
    ];
    }
}
