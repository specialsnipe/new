<?php

namespace App\Http\Controllers\Admin\Crops;

use App\Http\Controllers\Controller;
use App\Models\Crop;

class ShowController extends Controller
{
    public function __invoke(Crop $crop)
    {
        return view('admin.crop.show',compact('crop'));
    }
}
