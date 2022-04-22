<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Http\Filters\ClientFilter;
use App\Http\Requests\Admin\Clients\FilterRequest;
use App\Models\Client;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {

        $data = $request->validated();
        $filter = app()->make(ClientFilter::class, ['queryParams' => array_filter($data)]);

        $clients = Client::filter($filter)->paginate(20);

        $clientsCount = Client::onlyTrashed()->count();


        return view('admin.client.index', compact('clients', 'clientsCount'));
    }
}
