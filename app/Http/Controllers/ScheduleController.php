<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    //一覧表示
    public function index()
    {
        $schedules = Auth::user()->schedules()->get();
        return view('schedule.index',['schedules' => $schedules]);
    }

    //詳細画面表示
    public function detail(int $id)
    {
        //ユーザーに紐付いたスケジュール情報を取得
        $schedule = Auth::user()->schedules()->where('id',$id)->first();

        return view('schedule.detail',[
            'schedule' => $schedule,
        ]);
    }

    //新規登録画面
    public function add()
    {
        return view('schedule.add');
    }

    //新規登録機能
    public function store(Request $request)
    {
        $schedule = new Schedule();

        //値を代入
        $schedule->user_id = \Auth::id();
        $schedule->sch_date = $request->sch_date;
        $schedule->sch_part = $request->sch_part;
        $schedule->sch_contents = $request->sch_contents;

        // インスタンスの状態をデータベースに書き込む
        $schedule->save();

        return redirect()->route('index');
    }
}
