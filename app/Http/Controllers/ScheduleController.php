<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //一覧表示
    public function index()
    {
        return view('schedule.index');
    }
}
