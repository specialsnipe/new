<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;
use App\Models\Fertilizer;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['user'] = User::all()->count();
        $data['client'] = Client::all()->count();
        $data['crop'] = Crop::all()->count();
        $data['fertilizer'] = Fertilizer::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
