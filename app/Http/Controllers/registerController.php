<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class registerController extends BaseController
{
    public function register()
    {
     	return view('register');
    }

    public function registerUser(Request $req)
    {
     	$userFirstName = $req->input('first_name');
    	$userLastName = $req->input('last_name');
    	$userEmail = $req->input('email');
    	$userPass = $req->input('password');
    	$userMobile = $req->input('mobile_no');

    	$userPassword = password_hash($userPass,PASSWORD_DEFAULT);
    	$userName = $userFirstName." ".$userLastName;

    	//Check if the same mail exists. If yes, return error else store the user details
    	$check = DB::table('userdetails')->where('email', $userEmail)->first();
		if($check)
    		echo back()->with('existsError', 'E-mail already exists');

    	//Insert the userdetails
    	$values = array('name' => $userName, 'email' => $userEmail, 'phone' => $userMobile, 'password_digest' => $userPassword, 
    					'created_at' => NOW(), 'updated_at' => NOW());
    	
    	$storeUser = DB::table('userdetails')->insert($values);

    	//Fetch a single user detail
    	$getUserByEmail = DB::table('userdetails')->where('email', $userEmail)->first();
    	$userId = $getUserByEmail->id;
    	
    	$cost = 0.0;
        $prod = "No products purchased yet";

		//Insert values into payment
        $values = array('user_id' => $userId, 'products_shopped' => $prod, 'cost' => $cost, 
    					'created_at' => NOW(), 'updated_at' => NOW());
    	
    	$storePayment = DB::table('payment')->insert($values);

    	if($storePayment){
    		Session::put('userMail',$userEmail);
    		return redirect('home')->with( ['data' => $userEmail] );
    	}
    	else
    		echo back()->with('regError', 'Unknown error occured in registration');
	}

     public function loginUser(Request $req){
    	$userEmail = $req->input('email');
		$userPass = $req->input('password');    

		$getUserByEmail = DB::table('userdetails')->where('email', $userEmail)->first();
		if($getUserByEmail){
			$userPassword = $getUserByEmail->password_digest;
			if(password_verify($userPass,$userPassword)) 
         		return redirect('home');
         	else
         		echo back()->with('loginError', 'Wrong Login Details');      
        }else
				echo back()->with('loginError', 'Wrong Login Details');
    }

}

?>