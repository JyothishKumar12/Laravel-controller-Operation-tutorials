<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    function showprofile()
    {
        return view ('admin.aboutme');
    }
}
