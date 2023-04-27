<?php

namespace App\Exports;

use App\Models\TypeHandicap;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class ExportTypehandicap implements FromCollection,WithHeadings,WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $TypeHandicaps= TypeHandicap::select(
            'nom',
            'description'
        )->get();
        $TypeHandicaps->transform(function ($TypeHandicap) {
            $TypeHandicap->description = strip_tags($TypeHandicap->description);
            return $TypeHandicap;
        });

        return $TypeHandicaps;
    }

    
    public function headings(): array
    {
        return [
        'Nom',
        'Description'
    ];
    }
    
    public function title(): string
    {
        return "Type handicap";
    }
    
}
