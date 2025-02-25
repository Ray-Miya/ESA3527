<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // トップページ
    public function index()
    {
        return view('index'); //index.blade.phpを表示
    }

    // 新規登録ページ
    public function signUp()
    {
        return view('sign-up'); //sign-up.blade.phpを表示
    }
}
