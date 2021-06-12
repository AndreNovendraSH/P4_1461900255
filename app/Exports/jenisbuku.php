<?php

namespace App\Exports;

use App\Models\jenis_buku;
use Maatwebsite\Excel\Concerns\FromCollection;

class jenisbuku implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return jenis_buku::all();
    }
}
