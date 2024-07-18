<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaiTinController;
use App\Http\Controllers\TinTucController;
use App\Models\tin_tuc;
use App\Models\loai_tin;


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
Route::get('/', function () {   
        // $tinHot = tin_tuc::orderBy('luot_xem', 'desc')->latest('ngay_dang')->first();        
        $tinHot = tin_tuc::orderBy('luot_xem', 'desc')->latest('ngay_dang')->get();    
        // return $tinHot;    
        return view('client.index',['tinHot'=> $tinHot]);

})->name('trang-chu');

Route::get('/loai/{id}', function ($id) {
    $loai = tin_tuc::where('id_loai',$id)->get();
    $tenLoai =  loai_tin::where('id',$id)->get();
    // return $tenLoai[0];
    return view('client.tinloai',['loai'=> $loai,'tenLoai'=>$tenLoai]);
})->name('loai');





Route::get('/tin/{id}', function ( $id) {
    $tinTucController = new TinTucController();
    $tin = $tinTucController->find($id);
    return view('client.tin',['tin'=>$tin]);
    
})->name('tin');

Route::get('/timkiem',[TinTucController::class,'timKiem'])->name('timkiem');