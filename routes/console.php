<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.

| Questo file è il punto in cui puoi definire tutti i comandi della
| console basati su Chiusura. Ogni chiusura è associata a un'istanza
| di comando che consente un approccio semplice all'interazione
| con i metodi IO di ciascun comando.
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
