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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//web site routes
Route::get('/', 'websiteController@index');

Route::get('/services', 'websiteController@servicesPage');

Route::get('/request', 'websiteController@requestPage');

Route::get('/contactus', 'websiteController@contactusPage');

Route::get('/team', 'websiteController@teamPage');

// forms routes 
Route::post('requesr_add', 'websiteController@requestAdd');
Route::post('message_add', 'websiteController@messageAdd');

// dashboard routes 

Route::get('dashboard', 'adminController@index');

