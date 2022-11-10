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

| Qui è dove puoi registrare i percorsi web per la tua applicazione.
| Queste route vengono caricate da RouteServiceProvider
| all'interno di un gruppo che contiene il gruppo middleware "web".
| Ora crea qualcosa di fantastico!
*/

Route::get('/', 'ComicController@index');

Route::resource('comics', 'ComicController');
