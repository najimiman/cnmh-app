<?php

namespace App\Exports;

use App\Models\couvertureMedical;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportCouvertureMedical implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return couvertureMedical::all();
    }
}
