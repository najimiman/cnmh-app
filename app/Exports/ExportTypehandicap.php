<?php

namespace App\Exports;

use App\Models\TypeHandicap;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportTypehandicap implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TypeHandicap::all();
    }
}
