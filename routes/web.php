<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');
