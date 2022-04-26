<?php

namespace App\Http\Controllers\Products\Crop;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke(Crop $crop)
    {
        $fertilizers=$crop->fertilizers()->paginate(18);
        $crops = Crop::all();
        return view('product.crop.index',compact('fertilizers', 'crops'));
    }
}
