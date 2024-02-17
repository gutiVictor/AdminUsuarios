<?php

use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes casa
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will

|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[UsuarioController::class, 'index']);
Route::get('/Usuario/{id}',[UsuarioController::class, 'show']);
Route::post('/Usuario',[UsuarioController::class, 'store']);
Route::put('/Usuario/{id}',[UsuarioController::class, 'update']);
Route::delete('/Usuario/{id}',[UsuarioController::class, 'destroy']);

