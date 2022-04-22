<?php

namespace App\Http\Controllers\Admin\Crops;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Crops\StoreRequest;
use App\Models\Crop;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Crop::firstOrCreate($data);
        return redirect()->route('admin.crop.index');
    }
}
