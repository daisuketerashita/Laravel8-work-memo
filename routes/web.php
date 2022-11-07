<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

//ログインユーザーのみアクセスできる
Route::group(['middleware' => 'auth'],function(){
    Route::get('/',[ScheduleController::class,'index'])->name('index');
    Route::get('/detail/{id}',[ScheduleController::class,'detail'])->name('detail');
    //部位登録
    Route::get('/add',[ScheduleController::class,'add'])->name('add');
    Route::post('/add',[ScheduleController::class,'store'])->name('store');
    //種目登録
    Route::get('/add/exercise',[ExerciseController::class,'add'])->name('exe.add');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
