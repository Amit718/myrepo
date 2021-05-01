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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('skills', 'SkillsController');
Route::resource('education', 'EducationController');

//test
Route::get('/basic_response', function () {
   return 'Hello World';
});

Route::match(array('GET','POST'), '/test', 'HomeController@test')->name('test');

Route::get('localization/{local}','HomeController@testt');

Route::get('/facadeex', function() {
   return TestFacades::testingFacades();
});