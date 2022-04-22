<?php

namespace App\Http\Controllers\Admin\Deleted\Users;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use App\Models\User;

class DeleteController extends Controller
{
    public function __invoke($user)
    {
        $user = User::where('id', $user)->withTrashed()->first();
        $user->forceDelete();

        return redirect()->route('admin.deleted.user.index');
    }
}
