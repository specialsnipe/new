<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;
use App\Models\Fertilizer;

class DeleteController extends Controller
{
    public function __invoke(Fertilizer $fertilizer)
    {
        $fertilizer->delete();
        return redirect()->route('admin.fertilizer.index');
    }
}
