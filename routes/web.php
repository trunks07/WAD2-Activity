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
//STUDENTS(Activity)

Route::get('/students/home', 'StudentController@homePage');
Route::post('/students/process','StudentController@regProcess');
Route::get('/students/add','StudentController@addStudent');
Route::get('/students/{id}','StudentController@upDate');
Route::post('/students/save','StudentController@save');
Route::get('/delete/{id}','StudentController@processDelete');

