<?php

namespace App\Http\Controllers\Admin\Status;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use App\Models\ImportStatus;

class IndexController extends Controller
{
    public function __invoke()
    {
        $statusName=ImportStatus::getStatus();
        $importStatus = ImportStatus::paginate(10);
        return view('admin.status.index',compact('importStatus','statusName'));
    }
}
