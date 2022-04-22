<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Crop;

class CreateController extends Controller
{
    public function __invoke()
    {
        $crops = Crop::all();
        return view ('admin.fertilizer.create',compact('crops'));
    }
}
