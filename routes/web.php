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

Route::get('/', 'DetailsController@index')->name('vacante.index');

Route::get('/vacante/{id}', 'DetailsController@show')->name('vacante.show');
Route::get('/nueva-vacante', 'publicarVacante@index')->name('newVacante.index');
Route::post('/insertar-vacante', 'publicarVacante@insert')->name('newVacante.insert');
Route::get('/categoria', 'DetailsController@categoria')->name('vacante.categoria');
Route::get('/buscar', 'DetailsController@buscar')->name('vacante.buscar');

