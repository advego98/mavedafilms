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


}) ->name('newserie');


Route::get('/editserie', function () {

    return view ('admin.editserie');


}) ->name('editserie');


Route::get('/deleteserie', function () {

    return view ('admin.deleteserie');


}) ->name('deleteserie');


Route::get('/addgenre', function () {

    return view ('admin.addgenre');


}) ->name('addgenre');

Route::get('/deletegenre', function () {

    return view ('admin.deletegenre');


}) ->name('deletegenre');


Route::get('/deletegenre', function () {

    return view ('admin.deletegenre');


}) ->name('deletegenre');


Route::get('/newmovie', function () {

    return view ('admin.newmovie');


}) ->name('newmovie');


Route::get('/editmovie', function () {

    return view ('admin.editmovie');


}) ->name('editmovie');


Route::get('/deletemovie', function () {

    return view ('admin.deletemovie');


}) ->name('deletemovie');


Route::resource('registro','MavedaRegisterController');

Route::resource( 'serie', 'SerieController');

Route::resource( 'movies', 'MoviesController');



