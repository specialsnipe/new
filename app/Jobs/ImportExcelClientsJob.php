<?php

namespace App\Jobs;

use App\Imports\ClientsImport;
use App\Models\ImportStatus;
use App\Service\ImportService;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelClientsJob implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
        Excel::import(new ClientsImport($this->statusId), public_path('storage/' . $this->path));

    }
}
