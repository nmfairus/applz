<?php

namespace App\Exports;

use App\Models\Ekjp\EkjpKursuses;
use Maatwebsite\Excel\Concerns\FromCollection;

class KursusExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EkjpKursuses::all();
    }
}
