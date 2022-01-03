<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home','App\Http\Controllers\HomeController@index');
// Route::get('/', 'App\Http\Controllers\HomeController@index');
// Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/', function(){
    return view('B2Cadmin/login');
});

Route::get('/select-business', 'App\Http\Controllers\HomeController@bustype');
Route::get('/setup-store', 'App\Http\Controllers\HomeController@setupstore');
Route::get('/store-weblink', 'App\Http\Controllers\HomeController@storeweblink');
Route::get('/weblink', 'App\Http\Controllers\HomeController@weblink');
Route::any('/check_link', 'App\Http\Controllers\HomeController@check_link');
Route::any('/link_save', 'App\Http\Controllers\HomeController@link_save');

Route::any('/get-otp', 'App\Http\Controllers\HomeControllers@getotp');
Route::any('/gen-otp', 'App\Http\Controllers\HomeControllers@gen_otp');
Route::any('/verify-otp/{mob}', 'App\Http\Controllers\HomeControllers@verify_otp');
Route::any('/logout', 'App\Http\Controllers\HomeControllers@logout');



Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/categories', 'App\Http\Controllers\HomeController@category');
Route::get('/sub-categories', 'App\Http\Controllers\HomeController@subcategory');
Route::get('/banners', 'App\Http\Controllers\HomeController@banner');
Route::get('/discounts', 'App\Http\Controllers\HomeController@discount');
Route::get('/attributes', 'App\Http\Controllers\HomeController@attributesview');
Route::get('/brands', 'App\Http\Controllers\BrandController@index');

// SETTING PAGES
Route::get('/shipment-setting', 'App\Http\Controllers\SettingsController@index');
Route::get('/payment-setting', 'App\Http\Controllers\SettingsController@paymentsetup');
Route::get('/account-setting', 'App\Http\Controllers\SettingsController@accountsetup');
Route::get('/userweblink', 'App\Http\Controllers\SettingsController@weblink');
Route::get('/home-setting', 'App\Http\Controllers\SettingsController@homesetup');

// HELP & SUPPORT PAGES
Route::get('/faq', 'App\Http\Controllers\HelpController@index');
Route::get('/new-complaint', 'App\Http\Controllers\HelpController@newcomplaint');
Route::get('/old-complaint', 'App\Http\Controllers\HelpController@oldcomplaint');





Route::get('/product_list', 'App\Http\Controllers\ProductController@index');




Route::get('/add_product', 'App\Http\Controllers\ProductController@addproduct');
Route::get('/ap', 'App\Http\Controllers\ProductController@addproduct2');
Route::get('/ep', 'App\Http\Controllers\ProductController@editproduct2');
Route::any('/save_product', 'App\Http\Controllers\ProductController@save_product');
Route::any('get_subcat','App\Http\Controllers\ProductController@get_subcat');
Route::get('/edit_product', 'App\Http\Controllers\ProductController@editproduct');


// USER 
Route::get('/order', 'App\Http\Controllers\OrdersController@order');



// Route::get('/category/shop-product/{id}', 'App\Http\Controllers\HomeController@shopProduct');
    
// Route::get('/cart', 'App\Http\Controllers\HomeController@cart');

// Route::get('/faqs', 'App\Http\Controllers\HomeController@faq');

// Route::get('/register', 'App\Http\Controllers\HomeController@register');

// Route::get('/feedback', 'App\Http\Controllers\HomeController@feedback');

// Route::get('/orders', 'App\Http\Controllers\HomeController@order');

// Route::get('/category/{id}', 'App\Http\Controllers\HomeController@category');

// Route::get('/profile', 'App\Http\Controllers\HomeController@profile');

// Route::get('/edit-profile', 'App\Http\Controllers\HomeController@editProfile');

// Route::get('/contact', 'App\Http\Controllers\HomeController@contact');

// Route::get('/otp', 'App\Http\Controllers\HomeController@otp');

// Route::get('/login', 'App\Http\Controllers\HomeController@login');


// Quicksell B2C Admin

// Route::get('/products', 'App\Http\Controllers\ProductController@index');
// Route::get('/', 'App\Http\Controllers\ProductController@index');



Route::get('/add', 'App\Http\Controllers\ProductController@addview');
