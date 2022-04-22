<?php

namespace App\Http\Controllers\Admin\Deleted\Users;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke($user)
    {
        $user = User::where('id', $user)->withTrashed()->first();
        $user->restore();

        return redirect()->route('admin.deleted.user.index');
    }
}
