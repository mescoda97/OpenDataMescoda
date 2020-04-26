<?php

namespace App\Imports;

use App\preu;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\ToModel;

class preus_bcn_import implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new preu([
            'any' => $row[0],
            'trimestre' => $row[1],
            'codi_districte' => $row[2],
            'nom_districte' => $row[3],
            'codi_barri' => $row[4],
            'nom_barri' => $row[5],
            'lloguer_mitja' => $row[6],
            'preu' => $row[7]
        ]);
    }
}
