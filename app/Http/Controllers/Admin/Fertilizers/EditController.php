<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;
use App\Models\Fertilizer;

class EditController extends Controller
{
    public function __invoke(Fertilizer $fertilizer)
    {

        $crops = Crop::all();
        return view ('admin.fertilizer.edit',compact('fertilizer','crops'));
    }
}
