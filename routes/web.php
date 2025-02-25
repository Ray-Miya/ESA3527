<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']); // トップページ

Route::get('/sign-up', [UserController::class, 'signup']); // 新規登録ページ
