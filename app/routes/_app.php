<?php

use App\Controllers\ContactosController;

app()->get('/', function () {
    response()->json(['message' => 'Congrats!! You\'re on New API project ']);
});

app()->get('/contactos', 'ContactosController@index');
app()->get('/contactos/{id}', 'ContactosController@consultar');
app()->post('/contactos', 'ContactosController@agregar');
app()->delete('/contactos/{id}', 'ContactosController@borrar');
app()->put('/contactos/{id}', 'ContactosController@actualizar');