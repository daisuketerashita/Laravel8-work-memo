<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
    //種目登録画面
    public function add(int $id)
    {
        return view('exercise.add',['schedule_id' => $id]);
    }

    //種目登録処理
    public function store(int $id,Request $request)
    {
        $schedule_id = Schedule::find($id);
        
        //値を代入
        $exercise = new Exercise();
        $exercise->name = $request->name;
        $exercise->weight = $request->weight;
        $exercise->repetition = $request->repetition;
        $exercise->set_num = $request->set_num;
        $exercise->exe_contents = $request->exe_contents;

        // インスタンスの状態をデータベースに書き込む
        $schedule_id->exercises()->save($exercise);

        return redirect()->route('index');
    }
}
