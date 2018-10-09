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

Route::get('/blog', function () {
    return view('theme.blog');
});
Route::get('/gallery', function () {
    return view('theme.gallery');
});

Route::post('createReserva', 'ReservaController@createReserva')->name('createReserva');
Route::get('listReserva', 'ReservaController@listReserva')->name('listReserva')->middleware(['auth']);
Route::put('confirmReserva/{reserva}', 'ReservaController@confirmReserva')->name('confirmReserva')->middleware(['auth']);
Route::get('cancelarReserva/{reserva}', 'ReservaController@cancelarReserva')->name('cancelarReserva')->middleware(['auth']);
Route::delete('cancelReserva/{reserva}', 'ReservaController@cancelReserva')->name('cancelReserva')->middleware(['auth']);
Route::delete('delete/{reserva}', 'ReservaController@destroy')->name('destroy')->middleware(['auth']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
