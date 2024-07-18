<?php

namespace App\Http\Controllers;

use App\Models\tin_tuc;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storetin_tucRequest;
use App\Http\Requests\Updatetin_tucRequest;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function find($id)
    {
        $tin = tin_tuc::find($id);       
        return $tin;
    }

    public function listTin ($id) {
        $listtin = tin_tuc::where('id_loai',$id)->get();
        return $listtin;
    }

    public function tinHot () {
        $tinhot = tin_tuc::orderBy('luot_xem', 'desc')
        ->latest('ngay_dang')
        ->first();;
        return $tinhot;
    }
    public function  timKiem(Request $request)  {
        $loai = tin_tuc::where('tieu_de','LIKE','%'.$request->input('key').'%')->get();
       return view('client.timkiem',['loai'=>$loai,'tenLoai'=>'Kết quả tìm kiếm :']);
    }
    
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storetin_tucRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tin_tuc $tin_tuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tin_tuc $tin_tuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatetin_tucRequest $request, tin_tuc $tin_tuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tin_tuc $tin_tuc)
    {
        //
    }
}
