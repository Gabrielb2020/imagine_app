<?php

use App\Http\Controllers\CorreoController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/enviar-correo', [CorreoController::class, 'enviar_correo'])->name('enviar_correo');
Route::get('/messages', [MessageController::class, 'index'])->name('messages.list');



