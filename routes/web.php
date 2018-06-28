<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//home page
Route::get('/home', 'homeController@home');

//Login and sign up authentication
Route::get('/register', 'registerController@register');
Route::post('/registerUser', 'registerController@registerUser');
Route::post('/loginUser', 'registerController@loginUser');

Route::get('/contact', 'contactController@contact');
Route::get('/products', 'productController@viewProducts');
Route::get('/cart', 'cartController@viewCart');

//Route::get('mailRoute/{userMail}', ["uses" => 'productController@extractMail', "as" => 'mailRoute']);
//Route::get('products/{userMail}', ["uses" => 'productController@viewProducts', "as" => 'products']);


Route::get('cartLogic/{itemName}/{itemPrice}', ["uses" => 'productController@extractDetails', "as" => 'cartLogic']);

Route::get('/productDetails', 'productDetailController@viewProductDetails');
Route::get('/listView', 'viewController@listView');
Route::get('/gridView', 'viewController@gridView');
Route::get('/threeView', 'viewController@threeView');
Route::get('/fourView', 'viewController@fourView');
Route::get('/generalView', 'viewController@generalView');











