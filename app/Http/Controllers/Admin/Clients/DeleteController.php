<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;

class DeleteController extends Controller
{
    public function __invoke(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.client.index');
    }
}
