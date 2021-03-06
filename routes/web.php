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
Auth::routes();

Route::get('/', 'HomeController@index')->name('root');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user', 'UserController');
Route::get('/perfil', 'PerfilController@index')->name('perfil.index');
Route::match(['put', 'patch'],'/perfil/{user}', 'PerfilController@update')->name('perfil.update');
Route::get('/log', 'LogController@index')->name('log.index');
Route::get('/logsistema', 'LogController@geral')->name('log.geral');
