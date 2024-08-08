<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaiTinController;
use App\Http\Controllers\TinTucController;
use App\Models\tin_tuc;
use App\Models\loai_tin;
use App\Http\Controllers\AuthenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [TinTucController::class,'index'])->name('trang-chu');
Route::get('/loai/{id}',[TinTucController::class,'listLoai'])->name('loai');
Route::get('/tin/{id}', [TinTucController::class,'show'])->name('tin');
Route::get('/timkiem',[TinTucController::class,'timKiem'])->name('timkiem');

Route::get('login',[AuthenController::class,'loginForm'])->name('login');
Route::post('login',[AuthenController::class,'login']);

Route::get('register',[AuthenController::class,'registerForm'])->name('register');
Route::post('register',[AuthenController::class,'register']);

Route::get('logout',[AuthenController::class,'logout'])->name('logout');
Route::get('laypass',[AuthenController::class,'forgotForm'])->name('lay-pass');
Route::post('laypass',[AuthenController::class,'seenEmailResetPass']);

Route::prefix('admin')->group(function (){
  Route::get('dashboard',function (){
      return view('admin.dashboard');
  })->name('admin.dashboard');

    Route::get('news',[TinTucController::class,'list'])->name('news.list');
    Route::get('news/add',[TinTucController::class,'create'])->name('news.add');
    Route::post('news/add',[TinTucController::class,'store']);
    Route::get('news/edit/{id}',[TinTucController::class,'edit'])->name('news.edit');
    Route::post('news/edit/{id}',[TinTucController::class,'update']);
    Route::delete('news/{id}',[TinTucController::class,'destroy'])->name('news.delete');

    Route::get('categorynews',[LoaiTinController::class,'index'])->name('categorynews.list');
    Route::get('categorynews/add',[LoaiTinController::class,'create'])->name('categorynews.add');
    Route::post('categorynews/add',[LoaiTinController::class,'store']);
    Route::get('categorynews/edit/{id}',[LoaiTinController::class,'edit'])->name('categorynews.edit');
    Route::post('categorynews/edit/{id}',[LoaiTinController::class,'update']);
    Route::delete('categorynews/{id}',[LoaiTinController::class,'delete'])->name('categorynews.delete');

})->middleware(['auth',\App\Http\Middleware\IsAdmin::class]);
