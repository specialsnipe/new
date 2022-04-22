<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view ('admin.user.create');
    }
}
