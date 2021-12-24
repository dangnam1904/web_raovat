<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Custom_userController extends Controller
{
    public function getAll()
    {
        return view('admin.Custom_user.all_custom_user');
    }
}
