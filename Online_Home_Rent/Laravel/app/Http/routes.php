<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get("LogIn", "HomeController@LogIn");
Route::post("LogIn", "HomeController@submit_LogIn");

Route::get("Logout","LogoutController@LogOut");

Route::get("Register","HomeController@Register");
Route::post("Register","HomeController@submit_Register");


Route::get("PostAd", "AdvertiseController@Post_Ad");
Route::post("PostAd", "AdvertiseController@submit_Post_Ad");


Route::get("EditAd/{adid}", "AdvertiseController@Edit_Ad");

Route::get("AdDetails/{adid}","AdvertiseController@AdDetails");



Route::get("Rent","AdvancedSearchController@Advanced_Search");
Route::post("Rent","AdvancedSearchController@Submit_Advanced_Search");

Route::get("MyProfile","ProfileController@Profile");


//Route::get("CreateAlert","HomeController@createAleart");
Route::get("AdminPanel","AdminController@admin");
Route::post("AdminPanel","AdminController@adminlogin");
Route::post("AdminPanel/Discussion","AdminController@admindiscussion");



//Routes for admin panel

//Route::get("AdminPanel","AdminController@discussions");

Route::get("ReportedAd","AdminController@report");
Route::get("AdDelete/{adid}","AdminController@AdDelete");


Route::get("UserList","AdminController@users");
Route::get("DeleteUser/{userid}","AdminController@deleteusers");

Route::get("OtherAdmin","AdminController@otherAdmins");


Route::get("OtherMsz","AdminController@messages");
