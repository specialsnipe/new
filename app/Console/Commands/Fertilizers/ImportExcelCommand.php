<?php

namespace App\Console\Commands;

use App\Imports\FertilizersImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelCommand extends Command
{

    protected $signature = 'import:excelF';


    protected $description = 'Get data from excel';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');
        Excel::import(new FertilizersImport, public_path('excel/fertilizers.xlsx'));
        dd('complete');
    }
}
