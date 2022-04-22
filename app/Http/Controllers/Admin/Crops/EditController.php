<?php

namespace App\Http\Controllers\Admin\Crops;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Crop $crop)
    {
        return view ('admin.crop.edit',compact('crop'));
    }
}
