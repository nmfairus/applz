<?php

namespace App\Imports;

use App\Models\Ekjp\EkjpKursuses;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class KursusImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /*
        return new EkjpKursuses([
            'id'     => $row['id'],
            'kursus'    => $row['kursus'],
            'bidang' => $row['bidang'],
            'tempoh'     => $row['tempoh'],
            'yuran'    => $row['yuran'],
            'tarikh' => $row['tarikh'],
            'kandungan' => $row['kandungan'],
            'catatan' => $row['catatan'],
        ]);
        */
        return EkjpKursuses::updateOrCreate(
            ['id' => $row['id']],
                [
                'kursus' => $row['kursus'],
                'bidang' => $row['bidang'],
                'tempoh' => $row['tempoh'],
                'yuran' => $row['yuran'],
                'tarikh' => $row['tarikh'],
                'kandungan' => $row['kandungan'],
                'catatan' => $row['catatan'],
                ]
        );
    }
}
