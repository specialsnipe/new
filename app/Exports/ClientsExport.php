<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Illuminate\Contracts\View\View;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ClientsExport implements FromView, ShouldAutoSize, WithStyles
{

    public $clients;

    /**
     * IndexExport constructor.
     * @param $clients
     */
    public function __construct($clients)
    {
        $this->clients = $clients;
    }

    public function view(): View
    {
        return view('admin.excel.export.client', [
            'clients' => $this->clients
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }

}
