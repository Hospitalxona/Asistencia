<?php

namespace App\Exports;

use App\listaases;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ListasExport implements FromCollection,ShouldAutoSize,WithHeadings,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return listaases::all();
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
}
