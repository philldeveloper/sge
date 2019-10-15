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

Route::get('/', 'ControladorCasamentos@index');
Route::get('/casamentos', 'ControladorCasamentos@create');
Route::get('/aniversarios', 'ControladorAniversarios@create');

