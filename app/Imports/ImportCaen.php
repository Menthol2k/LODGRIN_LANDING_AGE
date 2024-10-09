<?php

namespace App\Imports;

use App\Models\Caen;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportCaen implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            Caen::create([
                'name' => $row['cod_caen'] . ' - ' . $row['titlu']
            ]);
        }
    }
}
