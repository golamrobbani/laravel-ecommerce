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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('storage:link');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/category/{slug}', 'CategoryController@index')->name('category');

Route::get('/product/{slug}', 'ProductController@index')->name('product');

Route::get('/cart', 'HomeController@cart')->name('cart');

Route::get('/wishlist', 'HomeController@wishlist')->name('wishlist');

Route::get('/checkout', 'HomeController@checkout')->name('checkout');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/blog/{slug}', 'BlogController@details')->name('blogdetails');

Route::get('/page/{slug}', 'ShopController@page')->name('page');

Route::get('/search', 'ProductController@search');

Route::post('/submit-contact', 'HomeController@submit_contact');

Route::get('/contact', 'ShopController@contact')->name('contact');

Route::get('/check_coupon/{coupon}/{total}', 'CouponController@check_coupon');


Route::post('/order', 'OrderController@create');

Route::post('/subscribe', 'HomeController@subscribe');

Route::post('/review', 'HomeController@review');


Route::group(['prefix' => 'myaccount',  'middleware' => 'auth'], function () {
    Route::get('/', 'UserController@dashboard');
    Route::get('/dashboard', 'UserController@dashboard');
    Route::get('/profile', 'UserController@profile');
    Route::post('/update-profile', 'UserController@update_profile');
    Route::post('/change-password', 'UserController@change_password');
    Route::get('/order-history', 'UserController@order_history');
    Route::get('/order-pending', 'UserController@order_pending');
    Route::get('/order/{order_id}', 'UserController@order_details');
});

Route::group(['prefix' => 'admin-view',  'middleware' => 'auth'], function () {
    Route::get('/order/{order_id}', 'UserController@admin_order_details');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
