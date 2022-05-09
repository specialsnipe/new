<?php

namespace App\Jobs;

use App\Imports\FertilizersImport;
use App\Models\ImportStatus;
use App\Service\ImportService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelFertilizersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $statusId;
    private $path;
    public $tries = 3;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path, $statusId)
    {
        $this->statusId=$statusId;
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        ImportService::updateStatus($this->statusId, ImportStatus::SUCCESS);
        Excel::import(new FertilizersImport($this->statusId), public_path('storage/'. $this->path));
    }
}
