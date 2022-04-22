<?php

namespace App\Http\Controllers\Admin\Crops;

use App\Http\Controllers\Controller;
use App\Models\Crop;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cropsCount = Crop::onlyTrashed()->count();
        $crops = Crop::all();
        return view('admin.crop.index',compact('crops','cropsCount'));
    }
}
