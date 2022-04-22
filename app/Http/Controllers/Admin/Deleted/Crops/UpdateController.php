<?php

namespace App\Http\Controllers\Admin\Deleted\Crops;

use App\Http\Controllers\Controller;
use App\Models\Crop;

class UpdateController extends Controller
{
    public function __invoke($crop)
    {
        $crop = Crop::where('id', $crop)->withTrashed()->first();
        $crop->restore();

        return redirect()->route('admin.deleted.crop.index');
    }
}
