<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;

class ShowController extends Controller
{
    public function __invoke(Client $client)
    {
        return view('admin.client.show',compact('client'));
    }
}
