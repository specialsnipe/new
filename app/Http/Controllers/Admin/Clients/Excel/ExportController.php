<?php

namespace App\Http\Controllers\Admin\Clients\Excel;

use App\Exports\ClientsExport;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function __invoke()
    {
        $clients = Client::all();
        return Excel::download(new ClientsExport($clients), 'clients.xlsx');
    }

}
