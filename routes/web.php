<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiturgiaController;

Route::get('/', [LiturgiaController::class, 'index'])->name('liturgia');


