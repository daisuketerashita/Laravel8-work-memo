<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //種目登録画面
    public function add()
    {
        return view('exercise.add');
    }

    //種目登録処理
}
