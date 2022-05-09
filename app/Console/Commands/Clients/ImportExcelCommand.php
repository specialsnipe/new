<?php

namespace App\Console\Commands\Clients;

use App\Imports\ClientsImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelCommand extends Command
{

    protected $signature = 'import:excelclients';


    protected $description = 'Get data from excel';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');
        Excel::import(new ClientsImport, public_path('excel/clients.xlsx'));
        dd('complete');
    }
}
