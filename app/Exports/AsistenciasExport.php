<?php

namespace App\Exports;

use App\Asistencias;
use App\listaases;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;

class AsistenciasExport implements FromQuery
{
    // use Exportable; 

    // private $fileName = "Asistencias.xlsx";
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Asistencias::all();
    // }

    use Exportable;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function query()
    {
        return listaases::query()->where('nombre', $this->name);
    }
}
