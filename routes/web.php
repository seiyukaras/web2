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
#Paginas
Route::get('/contact', function () {
    return view('theme.contact');
});

Route::get('/menu', function () {
    return view('theme.menu');
});

Route::get('/reservation', function () {
    return view('theme.reservation');
});

Route::get('blog','BlogController@listadoBlog')->name('listadoBlog');
Route::get('viewblog/{blog}','BlogController@viewBlog')->name('viewBlog');
Route::post('createComments','BlogController@createComments')->name('createComments');
Route::post('createCommreply','BlogController@createCommreply')->name('createCommreply')->middleware(['auth']);

Route::get('/gallery', function () {
    return view('theme.gallery');
});

Route::post('createReserva', 'ReservaController@createReserva')->name('createReserva');
Route::get('listReserva', 'ReservaController@listReserva')->name('listReserva')->middleware(['auth']);
Route::put('confirmReserva/{reserva}', 'ReservaController@confirmReserva')->name('confirmReserva')->middleware(['auth']);
Route::get('cancelarReserva/{reserva}', 'ReservaController@cancelarReserva')->name('cancelarReserva')->middleware(['auth']);
Route::delete('cancelReserva/{reserva}', 'ReservaController@cancelReserva')->name('cancelReserva')->middleware(['auth']);
Route::delete('delete/{reserva}', 'ReservaController@destroy')->name('destroy')->middleware(['auth']);

Route::get('listBlog', 'BlogController@listBlog')->name('listBlog')->middleware(['auth']);
Route::post('createBlog', 'BlogController@createBlog')->name('createBlog')->middleware(['auth']);
Route::delete('deleteb/{blog}', 'BlogController@destroy')->name('destroyb')->middleware(['auth']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
