<?php

namespace App\Http\Controllers\Admin\Deleted\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::onlyTrashed()->get();
        return view('admin.deleted.user.index', compact('users'));
    }
}
