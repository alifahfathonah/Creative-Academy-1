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
Route::post('/getStudentDetails','StudentInfoController@getStudentDetails')->middleware('loginCheck');
Route::post('/StudentUpdate','StudentInfoController@StudentUpdate')->middleware('loginCheck');

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
Route::get('/TeacherList','TeacherController@TeacherIndex')->middleware('loginCheck');
Route::get('/getTeacherData','TeacherController@getTeacherData')->middleware('loginCheck');
Route::post('/TeacherDelete','TeacherController@TeacherDelete')->middleware('loginCheck');
Route::post('/getTeacherDetails','TeacherController@getTeacherDetails')->middleware('loginCheck');
Route::post('/TeacherUpdate','TeacherController@TeacherUpdate')->middleware('loginCheck');
Route::post('/TeacherAdd','TeacherController@TeacherAdd')->middleware('loginCheck');


//For Notice List
Route::get('/Notice','NoticeController@Notice')->middleware('loginCheck');
Route::get('/getNoticeData','NoticeController@getNoticeData')->middleware('loginCheck');
Route::post('/NoticeDelete','NoticeController@NoticeDelete')->middleware('loginCheck');
Route::post('/getNoticeDetails','NoticeController@getNoticeDetails')->middleware('loginCheck');
Route::post('/NoticeUpdate','NoticeController@NoticeUpdate')->middleware('loginCheck');
Route::post('/NoticeAdd','NoticeController@NoticeAdd')->middleware('loginCheck');


//For Contact List
Route::get('/ContactIndex','ContactController@ContactIndex')->middleware('loginCheck');
Route::get('/getContactData','ContactController@getContactData')->middleware('loginCheck');
Route::post('/ContactDelete','ContactController@ContactDelete')->middleware('loginCheck');

//Admin Login
Route::get('/Login','LoginController@LoginPage');
Route::post('/onLogin','LoginController@onLogin');
Route::get('/Logout','LoginController@onLogout');
