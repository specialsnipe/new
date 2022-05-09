<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Illuminate\Contracts\View\View;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class FertilizersExport implements FromView, ShouldAutoSize, WithStyles
{

    public $fertilizers;

    /**
     * IndexExport constructor.
     * @param $indexes
     */
    public function __construct($fertilizers)
    {
        $this->fertilizers = $fertilizers;
    }

    public function view(): View
    {
        return view('admin.excel.export.fertilizer', [
            'fertilizers' => $this->fertilizers
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }

}
