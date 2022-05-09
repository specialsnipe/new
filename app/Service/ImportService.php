<?php

namespace App\Service;

use App\Models\ImportStatus;

class ImportService
{
    public static function updateStatus($importStatusId, $importStatus)
    {
        ImportStatus::firstWhere('id', $importStatusId)
            ->update(['status'=>$importStatus]);
    }

    public static function updateJson($importStatusId, $importStatus,$map)
    {

       ImportStatus::firstWhere('id', $importStatusId)
            ->update([
                'status'=>$importStatus,
                'failed'=>$map
            ]);
    }


}
