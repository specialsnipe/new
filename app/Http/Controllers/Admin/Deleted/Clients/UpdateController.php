<?php

namespace App\Http\Controllers\Admin\Deleted\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Fertilizer;

class UpdateController extends Controller
{
    public function __invoke($client)
    {
        $client = Client::where('id', $client)->withTrashed()->first();
        $client->restore();

        return redirect()->route('admin.deleted.client.index');
    }
}
