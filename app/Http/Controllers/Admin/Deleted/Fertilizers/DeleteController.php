<?php

namespace App\Http\Controllers\Admin\Deleted\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class DeleteController extends Controller
{
    public function __invoke($fertilizer)
    {
        $fertilizer = Fertilizer::where('id', $fertilizer)->withTrashed()->first();
        $fertilizer->forceDelete();

        return redirect()->route('admin.deleted.fertilizer.index');
    }
}
