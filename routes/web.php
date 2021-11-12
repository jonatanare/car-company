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
    return view('welcome');
});

Route::get('/estrena', function (){
    return view('estrena');
});

Route::get('/quote', 'QuoteController@index');

Route::post('/quote', 'QuoteController@store'); //Calcular quote
Route::post('/', 'MessagesController@store'); // Enviar formulario de contacto en home
Route::post('/estrena', 'MessagesController@store'); // Enviar formulario de contacto en estrena