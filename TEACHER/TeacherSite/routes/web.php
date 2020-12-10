<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');
Route::get('/visitor', 'VisitorController@VisitorIndex')->middleware('loginCheck');

// For Class Category
Route::get('/ClassCategoryIndex', 'ClassCategoryController@ClassCategoryIndex');
Route::get('/getClassCategoryData','ClassCategoryController@getClassCategoryData');
Route::post('/ClassCategoryDelete','ClassCategoryController@ClassCategoryDelete');
Route::post('/getClassCategoryDetails','ClassCategoryController@getClassCategoryDetails');
Route::post('/ClassCategoryUpdate','ClassCategoryController@ClassCategoryUpdate');
Route::post('/ClassCategoryAdd','ClassCategoryController@ClassCategoryAdd');

//Admin Login
Route::get('/Login','TeacherLoginController@LoginIndex');
Route::post('/onLogin','TeacherLoginController@onLogin');
Route::get('/Logout','TeacherLoginController@onLogout');
