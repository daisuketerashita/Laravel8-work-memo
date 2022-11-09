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
    Route::get('/add/exercise/{id}',[ExerciseController::class,'add'])->name('exe.add');
    Route::post('/add/exercise/{id}',[ExerciseController::class,'store'])->name('exe.store');
    //種目編集
    Route::get('/add/exercise/{id}/edit/{exe_id}',[ExerciseController::class,'edit'])->name('exe.edit');
    Route::post('/add/exercise/{id}/edit/{exe_id}',[ExerciseController::class,'update'])->name('exe.update');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
