<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;
use App\Models\Fertilizer;

class ShowController extends Controller
{
    public function __invoke(Fertilizer $fertilizer)
    {
        dd($fertilizer);
        return view('admin.fertilizer.show',compact('fertilizer'));
    }
}
