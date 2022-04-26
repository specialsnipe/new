<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke()
    {
        $fertilizers = Fertilizer::paginate(18);
        $crops = Crop::all();

        return view('product.index', compact('fertilizers', 'crops'));
    }
}
