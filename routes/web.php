<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepanController;

use App\Http\Controllers\TaskConttroler;
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
    return ("hello world");
});

Route::get('/depan', [DepanController::class, 'index']);

Route::get('/landingpage', [TaskConttroler::class, 'index']);
