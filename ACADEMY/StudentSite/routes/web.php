<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@HomePage');
Route::get('/refund', 'RefundController@RefundPage');
Route::get('/term', 'TermsController@TermPage');
Route::get('/about', 'AboutController@AboutIndex');

//Route::get('/courseplan', 'CoursePlanController@CoursePlanPage');
//Route::get('/freeclass', 'FreeClassController@FreeClassPage');

Route::get('/courses', 'CoursePlanController@CoursesPage');
Route::get('/CourseEnrollPage/{id}', 'CourseEnrollController@CourseEnrollPage')->middleware('check');


Route::get('/AllBlog', 'BlogController@AllBlog');
Route::get('/BlogDetails/{id}', 'BlogController@BlogDetails');

Route::get('/contact', 'ContactController@ContactIndex');
Route::post('/ContactSend', 'ContactController@ContactSend');

//Authentication
Route::get('/login','LoginController@LoginPage' );
Route::get('/registration','RegistrationController@RegistrationPage');
Route::post('/getRegistration','RegistrationController@onRegister');
Route::post('/passRecover','PassRecoverController@onRecover');
Route::post('/passReset','PassResetController@onReset');
Route::post('/loginSet','LoginController@onLogin');
Route::get('/logout','LogoutController@onLogout')->middleware('check');






//ClassRoom
Route::get('/classroom','ClassRoomController@ClassRoomPage')->middleware('check');

Route::post('/classRoomSummary','ClassRoomController@ClassRoomSummary')->middleware('check');
Route::post('/latestUpload','ClassRoomController@LatestUploads')->middleware('check');

Route::get('/tutorials','TutorialController@TutorialPage')->middleware('check');
Route::post('/tutorialByCategory','TutorialController@TutorialByCategory')->middleware('check');


Route::get('/files','FilesController@FilesPage')->middleware('check');
Route::post('/fileList','FilesController@FileList')->middleware('check');

Route::get('/message','MessageController@MessagePage')->middleware('check');
Route::get('/messageList','MessageController@MessageList')->middleware('check');


Route::get('/profile','ProfileController@ProfilePage')->middleware('check');
Route::post('/profileDetail','ProfileController@ProfileDetail')->middleware('check');


//StudentActivities
Route::post('/addVideoView','StudentActivitiesController@AddVideoView')->middleware('check');

