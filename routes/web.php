<?php

use Illuminate\Support\Facades\Route;

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

// Static Pages
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/recognition', 'pages.recognition')->name('recognition');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/instructors', 'pages.instructors')->name('instructors');
Route::view('/cisco-certification-track', 'pages.ciscocert')->name('cisco-certification-track');
Route::view('/fortinet-training', 'pages.fortinet')->name('fortinet-training');
Route::view('/iapp-certifications-courses-training', 'pages.iapp')->name('iapp-certifications-courses-training');
Route::view('/privacy-policy', 'pages.privacy')->name('privacy-policy');

Route::view('/admin', 'admin.home')->name('admin');


// for frontend development only
Route::get('/course', function () {
    return view('pages.course');
});

Route::get('/home', 'HomeController@index')->name('home');

/*
Auth::routes();
*/

/* uncommented
Route::get('/', function () {
    return view('home');
});
*/

