<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomeIndex');
Route::get('/visitor', 'VisitorController@VisitorIndex');

// For Course
Route::get('/courseIndex', 'CourseController@courseIndex');
Route::get('/getCourseData','CourseController@getCourseData');
Route::post('/CourseDelete','CourseController@CourseDelete');
Route::post('/getCourseDetails','CourseController@getCourseDetails');
Route::post('/courseUpdate','CourseController@courseUpdate');
Route::post('/CourseAdd','CourseController@CourseAdd');

//Admin Login
Route::get('/Login','LoginController@LoginIndex');
Route::post('/onLogin','LoginController@onLogin');
Route::get('/Logout','LoginController@onLogout');
