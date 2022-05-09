<?php

namespace App\Http\Controllers\Admin\Fertilizers\Excel;

use App\Http\Controllers\Controller;
use App\Jobs\ImportExcelFertilizersJob;
use App\Models\ImportStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{
    public function __invoke(Request $request)
    {
        $path = Storage::disk('public')->put('/filesExcel', $request['file']);

        $importStatus = ImportStatus::create([
            'filename'=>$request['file']->getClientOriginalName(),
            'user_id' => auth()->user()->id,
        ]);
        $statusId = $importStatus->id;

        ImportExcelFertilizersJob::dispatchNow($path, $statusId);

        $newStatus = ImportStatus::firstWhere('id', $statusId)->status;


        return view('admin.status', compact('newStatus'));
    }
}
