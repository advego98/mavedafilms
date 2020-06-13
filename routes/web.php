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


}) ->name('admin')->middleware('auth', 'role:admin') ;


Route::get('/newserie', function () {

    return view ('admin.newserie');


}) ->name('newserie')->middleware('auth', 'role:admin');

Route::get('/newseason', function () {

    return view ('admin.newseason');


}) ->name('newseason')->middleware('auth', 'role:admin');

Route::get('/newepisode', function () {

    return view ('admin.newepisode');


}) ->name('newepisode')->middleware('auth', 'role:admin');


Route::get('/editserie', function () {

    return view ('admin.editserie');


}) ->name('editserie')->middleware('auth', 'role:admin');


Route::get('/deleteserie', function () {

    return view ('admin.deleteserie');


}) ->name('deleteserie')->middleware('auth', 'role:admin');


Route::get('/addgenre', function () {

    return view ('admin.addgenre');


}) ->name('addgenre')->middleware('auth', 'role:admin');

Route::get('/addactor', function () {

    return view ('admin.addactor');


}) ->name('addactor')->middleware('auth', 'role:admin');

Route::get('/deletegenre', function () {

    return view ('admin.deletegenre');


}) ->name('deletegenre')->middleware('auth', 'role:admin');


Route::get('/deletegenre', function () {

    return view ('admin.deletegenre');


}) ->name('deletegenre')->middleware('auth', 'role:admin');


Route::get('/newmovie', function () {

    return view ('admin.newmovie');


}) ->name('newmovie')->middleware('auth', 'role:admin');


Route::get('/editmovie', function () {

    return view ('admin.editmovie');


}) ->name('editmovie')->middleware('auth', 'role:admin');


Route::get('/deletemovie', function () {

    return view ('admin.deletemovie')->middleware('auth', 'role:admin');


}) ->name('deletemovie');


Route::get('/start', function () {

    return view ('home');

}) ->name('home');


Route::get('/homeserie', function () {

    return view ('homeserie');

}) ->name('homeserie');

Route::get('/milista', function () {

    return view ('milista');

}) ->name('milista');






Route::resource('verserie','SerieController');

Route::resource('verseason','SeasonController');

Route::get('vertemp/{id}','SeasonController@crear')->name('vertemp');

Route::resource('verepisode','EpisodeController');

Route::get('verepi/{id}','EpisodeController@crear')->name('verepi');

Route::resource('vergenre','GenreController');

Route::resource('veractor','ActorController');

Route::resource('verpelicula','MoviesController');

Route::resource('inicio','HomeController');

Route::resource('registro','MavedaRegisterController');

Route::resource('lista','SeriefavController');

Route::resource('listam','MoviefavController');

Route::get('search', 'HomeController@busqueda')->name('search');

Route::get('homeserie', 'HomeController@seriehome')->name('homeserie');

Route::get('homemovie', 'HomeController@moviehome')->name('homemovie');

Route::post('buscadoresult','HomeController@buscador')->name('buscadoresult');

Route::get('buscadoresult','HomeController@buscador')->name('buscadoresult');

Route::get('rep_pelicula/{id}','MoviesController@vermovie')->name('rep_pelicula');
Route::get('rep_episode/{id}','EpisodeController@vercapi')->name('rep_episode');






