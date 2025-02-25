
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MentorController;

// トップページ
Route::get('/', [UserController::class, 'index']);

// 新規登録ページ
Route::get('/sign-up', [UserController::class, 'signup']);

// メンター一覧ページ
Route::get('/mentors', [MentorController::class, 'index']);

