<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');
Route::get('/visitor', 'VisitorController@VisitorIndex')->middleware('loginCheck');

// For Course
Route::get('/courseIndex', 'CourseController@courseIndex')->middleware('loginCheck');
Route::get('/getCourseData','CourseController@getCourseData')->middleware('loginCheck');
Route::post('/CourseDelete','CourseController@CourseDelete')->middleware('loginCheck');
Route::post('/getCourseDetails','CourseController@getCourseDetails')->middleware('loginCheck');
Route::post('/courseUpdate','CourseController@courseUpdate')->middleware('loginCheck');
Route::post('/CourseAdd','CourseController@CourseAdd')->middleware('loginCheck');

//For Student
Route::get('/StudentInfo', 'StudentInfoController@StudentIndex')->middleware('loginCheck');
Route::get('/getStudentData','StudentInfoController@getStudentData')->middleware('loginCheck');
Route::post('/StudentDelete','StudentInfoController@StudentDelete')->middleware('loginCheck');

//For Course Feature
Route::get('/courseFeatureIndex', 'CourseFeatureController@courseFeatureIndex')->middleware('loginCheck');
Route::get('/getCourseFeatureData','CourseFeatureController@getCourseFeatureData')->middleware('loginCheck');
Route::post('/CourseFeatureDelete','CourseFeatureController@CourseFeatureDelete')->middleware('loginCheck');
Route::post('/getCourseFeatureDetails','CourseFeatureController@getCourseFeatureDetails')->middleware('loginCheck');
Route::post('/courseFeatureUpdate','CourseFeatureController@courseFeatureUpdate')->middleware('loginCheck');
Route::post('/CourseFeatureAdd','CourseFeatureController@CourseFeatureAdd')->middleware('loginCheck');


//For Payment Guide
Route::get('/PaymentGuideIndex', 'PaymentGuideController@PaymentGuideIndex')->middleware('loginCheck');
Route::get('/getPaymentGuideData','PaymentGuideController@getPaymentGuideData')->middleware('loginCheck');
Route::post('/PaymentGuideDelete','PaymentGuideController@PaymentGuideDelete')->middleware('loginCheck');
Route::post('/getPaymentGuideDetails','PaymentGuideController@getPaymentGuideDetails')->middleware('loginCheck');
Route::post('/PaymentGuideUpdate','PaymentGuideController@PaymentGuideUpdate')->middleware('loginCheck');
Route::post('/PaymentGuideAdd','PaymentGuideController@PaymentGuideAdd')->middleware('loginCheck');

//For Login Info Student
Route::get('/LoginInfoStudentIndex', 'LoginInfoStudentController@LoginInfoStudentIndex')->middleware('loginCheck');
Route::get('/getLoginInfoStudentData','LoginInfoStudentController@getLoginInfoStudentData')->middleware('loginCheck');


//For Teacher List
Route::get('/TeacherList','TeacherController@TeacherIndex');
Route::get('/getTeacherData','TeacherController@getTeacherData');
Route::post('/TeacherDelete','TeacherController@TeacherDelete');
Route::post('/getTeacherDetails','TeacherController@getTeacherDetails');
Route::post('/TeacherUpdate','TeacherController@TeacherUpdate');
Route::post('/TeacherAdd','TeacherController@TeacherAdd');

//Admin Login
Route::get('/Login','LoginController@LoginPage');
Route::post('/onLogin','LoginController@onLogin');
Route::get('/Logout','LoginController@onLogout');
