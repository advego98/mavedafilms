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

Route::get('/newseason', function () {

    return view ('admin.newseason');


}) ->name('newseason');

Route::get('/newepisode', function () {

    return view ('admin.newepisode');


}) ->name('newepisode');


Route::get('/editserie', function () {

    return view ('admin.editserie');


}) ->name('editserie');


Route::get('/deleteserie', function () {

    return view ('admin.deleteserie');


}) ->name('deleteserie');


Route::get('/addgenre', function () {

    return view ('admin.addgenre');


}) ->name('addgenre');

Route::get('/addactor', function () {

    return view ('admin.addactor');


}) ->name('addactor');

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


Route::get('/start', function () {

    return view ('home');

}) ->name('home');


Route::get('/homeserie', function () {

    return view ('homeserie');

}) ->name('homeserie');


Route::resource('verserie','SerieController');

Route::resource('verserie','SerieController');

Route::resource('verseason','SeasonController');

Route::resource('verepisode','EpisodeController');

Route::resource('vergenre','GenreController');

Route::resource('veractor','ActorController');

Route::resource('verpelicula','MoviesController');

Route::resource('inicio','HomeController');

Route::resource('registro','MavedaRegisterController');

Route::get('search', 'HomeController@busqueda')->name('search');

Route::get('homeserie', 'HomeController@seriehome')->name('homeserie');

Route::get('homemovie', 'HomeController@moviehome')->name('homemovie');





