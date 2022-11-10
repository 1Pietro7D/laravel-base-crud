<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

| Qui è dove puoi registrare i percorsi API per la tua applicazione.
| Queste route vengono caricate da RouteServiceProvider all'interno
| di un gruppo a cui è assegnato il gruppo middleware "api".
| Divertiti a costruire la tua API!
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
