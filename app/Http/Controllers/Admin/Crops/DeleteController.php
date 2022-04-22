<?php

namespace App\Http\Controllers\Admin\Crops;

use App\Http\Controllers\Controller;
use App\Models\Crop;

class DeleteController extends Controller
{
    public function __invoke(Crop $crop)
    {
        $crop->delete();
        return redirect()->route('admin.crop.index');
    }
}
