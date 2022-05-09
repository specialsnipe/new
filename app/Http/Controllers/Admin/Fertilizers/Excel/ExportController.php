<?php

namespace App\Http\Controllers\Admin\Fertilizers\Excel;

use App\Exports\FertilizersExport;
use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function __invoke()
    {
        $fertilizers = Fertilizer::all();
        return Excel::download(new FertilizersExport($fertilizers), 'fertilizers.xlsx');
    }

}
