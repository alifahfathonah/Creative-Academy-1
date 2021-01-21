<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');

// For Class List
Route::get('/ClassListIndex', 'ClassListController@ClassListIndex')->middleware('loginCheck');
Route::get('/getClassListData','ClassListController@getClassListData')->middleware('loginCheck');
Route::post('/ClassListDelete','ClassListController@ClassListDelete')->middleware('loginCheck');
Route::post('/getClassListDetails','ClassListController@getClassListDetails')->middleware('loginCheck');
Route::post('/ClassListUpdate','ClassListController@ClassListUpdate')->middleware('loginCheck');
Route::post('/ClassListAdd','ClassListController@ClassListAdd')->middleware('loginCheck');

// For Course Plan
Route::get('/CoursePlanIndex', 'CoursePlanController@CoursePlanIndex')->middleware('loginCheck');
Route::get('/getCoursePlanData','CoursePlanController@getCoursePlanData')->middleware('loginCheck');
Route::post('/CoursePlanDelete','CoursePlanController@CoursePlanDelete')->middleware('loginCheck');
Route::post('/getCoursePlanDetails','CoursePlanController@getCoursePlanDetails')->middleware('loginCheck');
Route::post('/CoursePlanUpdate','CoursePlanController@CoursePlanUpdate')->middleware('loginCheck');
Route::post('/CoursePlanAdd','CoursePlanController@CoursePlanAdd')->middleware('loginCheck');


// For File Document
Route::get('/FileDocumentIndex', 'FileDocumentController@FileDocumentIndex')->middleware('loginCheck');
Route::get('/getFileDocumentData','FileDocumentController@getFileDocumentData')->middleware('loginCheck');
Route::post('/FileDocumentDelete','FileDocumentController@FileDocumentDelete')->middleware('loginCheck');
Route::post('/getFileDocumentDetails','FileDocumentController@getFileDocumentDetails')->middleware('loginCheck');
Route::post('/FileDocumentUpdate','FileDocumentController@FileDocumentUpdate')->middleware('loginCheck');
Route::post('/FileDocumentAdd','FileDocumentController@FileDocumentAdd')->middleware('loginCheck');

//Admin Login
Route::get('/Login','TeacherLoginController@LoginIndex');
Route::post('/onLogin','TeacherLoginController@onLogin');
Route::get('/Logout','TeacherLoginController@onLogout');
