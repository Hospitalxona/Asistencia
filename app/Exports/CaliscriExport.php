<?php

namespace App\Exports;

use App\Calis;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class CaliscriExport implements FromQuery,ShouldAutoSize,WithHeadings,WithEvents
{
   
    use Exportable;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

     public function headings(): array
    {
        return [
            'No.',
            'NOMBRE DE EXAMEN',
            'EXAMEN TIPO',
            'NOMBRE DE USUARIO',
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

    public function query()
    {
        return Calis::query()->where('examen', $this->name);
    }
   
}