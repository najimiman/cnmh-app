<?php

namespace App\Exports;

use App\Models\NiveauScolaire;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NiveauScolaireExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NiveauScolaire::select("id","nom","description")->get();
    }
    public function headings(): array
    {
        return ["Nombre", "Nom", "Description"];
    }
}
