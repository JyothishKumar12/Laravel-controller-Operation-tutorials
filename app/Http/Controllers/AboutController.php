<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function show ($name){
        return "Hello Controller".$name;
    }

   
}




