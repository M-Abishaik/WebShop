<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productDetailController extends Controller
{
    function viewProductDetails()
    {
     return view('product-detail');
    }
}

?>