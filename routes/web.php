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
    return view('rosalia_mwai.home');
});

Route::get('/students', function () {
    return view('rosalia_mwai.student');
});

Route::get('/fees', function () {
    return view('rosalia_mwai.fees');
});

Route::post('student_register','StudentController@save');

Route::post('fees_payment','FeesController@save');

Route::get('search/fees_payment','FeesController@search');
Route::get('viewall/fees_payment','FeesController@allstudentsfees');