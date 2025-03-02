<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('movie', function(){
    //
});

Broadcast::channel('auth.user.{id}', function ($user, $id, $receiverId) {
    return (int) $user->id === (int) $id;
});
