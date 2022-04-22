<?php

namespace App\Http\Controllers\Admin\Deleted\Crops;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class DeleteController extends Controller
{
    public function __invoke($crop)
    {
        $crop = Fertilizer::where('id', $crop)->withTrashed()->first();
        $crop->forceDelete();

        return redirect()->route('admin.deleted.crop.index');
    }
}
