<?php

namespace App\Http\Controllers\Admin\Deleted\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        $clients = Client::onlyTrashed()->get();
        return view('admin.deleted.client.index', compact('clients', ));
    }
}
