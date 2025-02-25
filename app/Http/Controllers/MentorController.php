<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;

class MentorController extends Controller

{
    public function index()
    {
        // メンター一覧を取得
        $mentors = Mentor::all();
        
        // ビューに渡す
        return view('mentors', compact('mentors'));
    }
}
