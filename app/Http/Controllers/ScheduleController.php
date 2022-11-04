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
}
