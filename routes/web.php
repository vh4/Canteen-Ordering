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
    return view('auth.login');
});

Route::post('/postreg', 'LoginController@createRegister');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/postlgn', 'LoginController@loginPost');

Route::group(['middleware' => ['auth','status:admin,user']],function(){

//Route::get('/home', 'Dashboard@home');
Route::get('/home', 'Dashboard@pagination');
Route::get('/logout','LoginController@logout');

});

Route::group(['middleware' => ['auth','status:admin']],function(){

Route::post('/input', 'Dashboard@buat');
Route::get('/home/{del}/delete', 'Dashboard@delete');
Route::post('/home/{user_detail_id}/edit', 'Dashboard@update');

Route::get('/home/food', 'FoodControll@index');
Route::post('/home/food/input', 'FoodControll@create');
Route::get('/food/{del_food}/delete','FoodControll@delete');
Route::post('/home/food/{food_edit}/edit', 'FoodControll@update');
Route::get('/register', 'LoginController@register');

});



Route::group(['middleware' => ['auth','status:admin,user']],function(){

    Route::get('/home/cart/{food_id}', 'CartControll@add')->name('cart.add')->middleware('auth');
    Route::get('/home/cart', 'CartControll@index');
    Route::get('/home/cart/delete/{delete_cart}', 'CartControll@delete');
    Route::post('/home/cart/update/qty/{qty_id}','CartControll@update');
    Route::get('/home/order/history','History@index');
    Route::get('/home/food/cart/payment', 'Payments@index');
    Route::get('/home/{id_profile}/edit/profile', 'Profile@index');
    Route::post('/profile/{id_edit_prof}/edit', 'Profile@edit');
    Route::get('/home/{id_view_pro}/profile', 'Profile@view');
    Route::get('/home/order/konfirmasi/{confirm_id}','History@confirm');

});

