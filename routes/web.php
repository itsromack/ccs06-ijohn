<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstJohnController;

Route::get('/', [FirstJohnController::class, 'index']);
Route::get('/chapter/{chapter_number}', [FirstJohnController::class, 'readByChapter']);
Route::get('/all-chapters', [FirstJohnController::class, 'readAllChapters']);