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

Route::get('/', 'RegistrationController@index');
Route::post('register_lawyer', 'RegistrationController@insert');
Route::get('get_city', 'RegistrationController@get_city');
Route::get('lawyer_registration', 'RegistrationController@lawyer_registration');
Route::get('services', 'RegistrationController@services');
Route::get('contactus', 'RegistrationController@contact');
Route::get('save_query', 'RegistrationController@save_query');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');