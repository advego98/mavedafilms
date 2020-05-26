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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/changepassword', function () {

    return view ('password');


}) ->name('changepassword') ;


Route::get('/planchoose', function () {

    return view ('stepregisters.planchoose');


}) ->name('planchoose') ;


Route::get('/paymentmethod', function () {

    return view ('stepregisters.paymentmethod');


}) ->name('paymentmethod') ;


Route::get('/profiles', function () {

    return view ('profile.profile');


}) ->name('profile') ;



Route::get('/admin', function () {

    return view ('admin.adminpage');


}) ->name('admin') ;


Route::get('/newserie', function () {

    return view ('admin.newserie');


}) ->name('newserie') ;


Route::get('/editserie', function () {

    return view ('admin.editserie');


}) ->name('editserie') ;


Route::resource('registro','MavedaRegisterController');




