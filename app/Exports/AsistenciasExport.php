<?php

namespace App\Exports;

use App\Asistencias;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;

class AsistenciasExport implements FromCollection, Responsable
{
    use Exportable; 

    private $fileName = "Asistencias.xlsx";
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Asistencias::all();
    }
}
