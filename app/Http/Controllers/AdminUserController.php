<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    function uservalue($name)
    {
        return view('admin.user',['name'=>$name]);
    }
}
