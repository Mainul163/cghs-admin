<?php

namespace App\Exports;

use App\Models\Dashboard;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class DasboardExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Dashboard::getAllsUsers());
        // return Dashboard::all();
    }

    public function headings():array{
        return ['Id','Name','Batch','Mobile_Number','Blood_Group','T_Shirt','Profession','Profession_Institute','Designation','Guest','Total','Transaction_Number','Transaction_id','Status','Address','Date'];
    }
    public function getCsvSettings(): array
    {
        return [
            'enclosure' => ''
        ];
    }
}