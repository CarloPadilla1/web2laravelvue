<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {

    //aquí irán las rutas protegidas por login

    return $request->user();
})->middleware('auth:sanctum');

// aquí irán las rutas públicas o de pruebas

// ejemplo de como se deben apuntar a las rutas de los controladores 
Route::get('getUsers',[UserController::class,'index']);
Route::post('postUser', [UserController::class,'createUser']);
Route::put('updateUser', [UserController::class,'updateUser']);
Route::delete('deleteUser', [UserController::class,'deleteUser']);