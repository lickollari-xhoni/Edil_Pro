<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/about', [PageController::class, 'about']);


Route::get('/contacts', [PageController::class, 'contacts']);

Route::post('/contacts/invia-al-server', [PageController::class, 'send'])->name('invia-al-server');

