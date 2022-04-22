<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $usersCount = User::onlyTrashed()->count();
        $users = User::all();
        return view('admin.user.index', compact('users','usersCount'));
    }
}
