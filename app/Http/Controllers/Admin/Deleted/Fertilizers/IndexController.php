<?php

namespace App\Http\Controllers\Admin\Deleted\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $fertilizers = Fertilizer::onlyTrashed()->get();
        return view('admin.deleted.fertilizer.index',compact('fertilizers'));
    }
}
