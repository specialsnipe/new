<?php

namespace App\Http\Controllers\Admin\Crops;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Crops\UpdateRequest;
use App\Models\Crop;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Crop $crop)
    {

        $data = $request->validated();
        $crop->update($data);
        return redirect()->route('admin.crop.show',compact('crop'));
    }
}
