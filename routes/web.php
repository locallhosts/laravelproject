<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


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
    return view::make('welcome');

 });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile') ->name('profile');

Route::get('/update', 'HomeController@update') ->name('update');

//Route::get('/link', 'HomeController@link') ->name('link')

Route::post('/upload', 'HomeController@avatarimage');

//product link
//Route::get('/products', 'ProductController@products')->name('products');

//upload inmages route
// Route::post('/upload', function (Request $request) {

//     //dd('done'); to get the token
//     //dd(request()-> hasFile('image')) ; to get is the file upload

//       $request->image->store('images', 'public');
//      return 'uploadeds';

// products route
Route::get('/products', 'ProductsController@index')->name('product');



Route::get('/product/detail/{product}', 'ProductsController@show')->name('show');

