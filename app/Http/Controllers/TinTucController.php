<?php

namespace App\Http\Controllers;

use App\Models\tin_tuc;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storetin_tucRequest;
use App\Http\Requests\Updatetin_tucRequest;
use Illuminate\Http\Request;
use App\Models\loai_tin;
use Illuminate\Support\Facades\Storage;

class TinTucController extends Controller
{
//    public function __construct()
//    {
//        $categories = loai_tin::all();
//        return view('client\layout\partials\headernav',compact('categories'));
//    }

    public function find($id)
    {
        $tin = tin_tuc::find($id);
        return $tin;
    }

    public function listTin($id)
    {
        $listtin = tin_tuc::where('id_loai', $id)->get();
        return $listtin;
    }

    public function tinHot()
    {
        $tinhot = tin_tuc::orderBy('luot_xem', 'desc')
            ->latest('ngay_dang')
            ->first();;
        return $tinhot;
    }

    public function timKiem(Request $request)
    {
        $loai = tin_tuc::where('tieu_de', 'LIKE', '%' . $request->input('key') . '%')->get();
        return view('client.timkiem', ['loai' => $loai, 'tenLoai' => 'Kết quả tìm kiếm :']);
    }

    public function index()
    {
        $categories = loai_tin::all();
        // $tinHot = tin_tuc::orderBy('luot_xem', 'desc')->latest('ngay_dang')->first();
        $tinHot = tin_tuc::orderBy('luot_xem', 'desc')->latest('ngay_dang')->get();
        // return $tinHot;
        return view('client.index', ['tinHot' => $tinHot]);
    }

    public function listLoai($id)
    {
        $loai = tin_tuc::where('id_loai', $id)->get();
        $tenLoai = loai_tin::where('id', $id)->get();
        // return $tenLoai[0];
        return view('client.tinloai', ['loai' => $loai, 'tenLoai' => $tenLoai]);


    }

    public function list()
    {
        $listTin = tin_tuc::with('loaiTin')->get();
//        var_dump($listTin);
        return view('admin.new.list', ['listTin' => $listTin]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listLoais = loai_tin::all();
        return view('admin.new.add', ['listLoais' => $listLoais]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storetin_tucRequest $request)
    {

        try {
            $data = $request->all();
            if ($request->hasFile('hinh_anh')) {
                $a = Storage::put('image', $request->file("hinh_anh"));
                $data['hinh_anh'] = $a;
            }
//            return $request->all();
            tin_tuc::create($data);
            return redirect()->back()->with('success', 'Thêm tin thành công!');

        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());

        }


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tin = tin_tuc::find($id);
        $tin->increment('luot_xem');
//        var_dump($tin);
        return view('client.tin', ['tin' => $tin]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $listLoais = loai_tin::all();
        $tin = tin_tuc::find($id);
//        return $tin;
        return view('admin.new.edit', ['tin' => $tin, 'listLoais' => $listLoais]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatetin_tucRequest $request, $id)
    {
        $tin = tin_tuc::findOrFail($id);
        $data = $request->all();
        try {
            if ($request->hasFile('hinh_anh')) {
                \Storage::delete($tin->hinh_anh);
                $a = Storage::put('image', $request->file("hinh_anh"));
                $data['hinh_anh'] = $a;


            } else {
                $data['hinh_anh'] = $tin->hinh_anh;
            }
            $tin->update($data);
            return redirect()->back()->with('success', 'Sửa tin thành công!');
        } catch (\Exception $exception) {
            return back()->with('erorr', 'Sửa thất bại !');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        tin_tuc::destroy($id);
        return back()->with('success', 'Thao tác thành công!');
    }
}
