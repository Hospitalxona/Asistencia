<?php

namespace App\Exports;

use App\Asistencias;
use App\listaases;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class AsistenciasExport implements FromQuery,ShouldAutoSize,WithHeadings,WithEvents
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

     public function headings(): array
    {
        return [
            'No.',
            'NOMBRE',
            'APELLIDO',
            'CORREO ELECTRONICO',
            'FUNCIÓN',
            'FECHA DE REGISTRO',
            'HORA DE REGISTRO',
            'HORA DE SALIDA',
            'NoC.',
            'CAPACITACIÓN',
            'FIRMA DE ASISTENCIA',
        ];
    }

    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:K1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(9);
            },
        ];
    }

    public function query()
    {
        return listaases::query()->where('capacitacion', $this->name);
    }

    

   
}



