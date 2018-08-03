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

Route::get('/',"PostController@index");

Route::post("registroEstudiante","PostController@registroEstudiante");

Route::post("postEmail","PostController@mail");

Route::get("/lista","ListaController@index");
