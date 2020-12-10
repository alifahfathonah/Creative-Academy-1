<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');
Route::get('/visitor', 'VisitorController@VisitorIndex')->middleware('loginCheck');

// For Course
//Route::get('/courseIndex', 'CourseController@courseIndex');
//Route::get('/getCourseData','CourseController@getCourseData');
//Route::post('/CourseDelete','CourseController@CourseDelete');
//Route::post('/getCourseDetails','CourseController@getCourseDetails');
//Route::post('/courseUpdate','CourseController@courseUpdate');
//Route::post('/CourseAdd','CourseController@CourseAdd');

//Admin Login
Route::get('/Login','TeacherLoginController@LoginIndex');
Route::post('/onLogin','TeacherLoginController@onLogin');
Route::get('/Logout','TeacherLoginController@onLogout');
