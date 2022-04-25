<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Http\Filters\FertilizerFilter;
use App\Http\Requests\Admin\Fertilizers\FilterRequest;
use App\Models\Crop;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(FertilizerFilter::class, ['queryParams' => array_filter($data)]);
        $fertilizers = Fertilizer::filter($filter)->paginate(10);


        $fertilizersCount = Fertilizer::onlyTrashed()->count();
        $crops = Crop::all();
        $allFertilizers=Fertilizer::all();
        return view('admin.fertilizer.index', compact('fertilizers', 'fertilizersCount', 'crops','allFertilizers'));
    }
}
