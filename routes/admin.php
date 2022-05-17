<?php

use App\Http\Controllers\admin\DashController;
use Illuminate\Support\Facades\Route;

Route::get('', [DashController::class, 'index'])->name('dash.index');