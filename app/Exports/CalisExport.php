<?php

namespace App\Exports;

use App\Calis;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class CalisExport implements FromCollection,ShouldAutoSize,WithHeadings,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Calis::all();
    }

    public function headings(): array
    {
        return [
            'No.',
            'EXAMEN',
            'TIPO',
            'USUARIO',
            'CAL.PRE',
            'CAL.POS',
            'PROMEDIO',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:G1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(9);
            },
        ];
    }
}
