<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    function listView()
    {
     return view('list-view');
    }

    function gridView()
    {
     return view('grid-view');
    }

    function threeView()
    {
     return view('three-view');
    }

    function fourView()
    {
     return view('four-view');
    }

    function generalView()
    {
     return view('general-view');
    }
}

?>