<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Http\Filters\FertilizerFilter;
use App\Http\Requests\Admin\Fertilizers\FilterRequest;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(FertilizerFilter::class, ['queryParams' => array_filter($data)]);
        $fertilizers = Fertilizer::filter($filter)->paginate(20);



        $fertilizersCount = Fertilizer::onlyTrashed()->count();
       // $fertilizers = Fertilizer::paginate(10);
        return view('admin.fertilizer.index', compact('fertilizers', 'fertilizersCount'));
    }
}
