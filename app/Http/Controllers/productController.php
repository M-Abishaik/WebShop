<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Session;

class productController extends BaseController
{
    /*public function viewProducts($userMail){
   		return View::make('product')->with('mail',$userMail);
	}

	public function extractMail($userMail){
		return Redirect::route('products', ['userMail' => $userMail]);
	}*/

	public function viewProducts(){
		return view('product');
	}

	public function extractDetails($itemName, $itemPrice){
		Session::put('itemName',$itemName);
		Session::put('itemPrice',$itemPrice);
		return redirect('home');
	}
}
?>