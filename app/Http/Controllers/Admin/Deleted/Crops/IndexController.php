<?php

namespace App\Http\Controllers\Admin\Deleted\Crops;

use App\Http\Controllers\Controller;
use App\Models\Crop;

class IndexController extends Controller
{
    public function __invoke()
    {
        $crops = Crop::onlyTrashed()->get();
        return view('admin.deleted.crop.index',compact('crops'));
    }
}
