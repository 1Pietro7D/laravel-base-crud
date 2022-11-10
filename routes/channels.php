<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.

| Qui puoi registrare tutti i canali di trasmissione degli eventi
| supportati dalla tua applicazione. I callback di autorizzazione
| del canale forniti vengono utilizzati per verificare se
| un utente autenticato può ascoltare il canale.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
