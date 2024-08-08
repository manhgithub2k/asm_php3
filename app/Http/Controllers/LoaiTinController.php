<?php

namespace App\Http\Controllers;

use App\Models\loai_tin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storeloai_tinRequest;
use App\Http\Requests\Updateloai_tinRequest;

class LoaiTinController extends Controller
{
    public function __construct()
    {
        echo 'hâh';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $listLoais = loai_tin::all();
        return view('admin.categorynew.list', ['listLoais' => $listLoais]);


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorynew.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeloai_tinRequest $request)
    {
        try {
            loai_tin::create($request->all());
            return redirect()->back()->with('success', 'Tạo mới loại tin thành công!');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi tạo mới loại tin!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(loai_tin $loai_tin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)

    {
        $loai = loai_tin::find($id);

        return view('admin.categorynew.edit', ['loai' => $loai]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateloai_tinRequest $request, $id)
    {

        try {
            $loai_tin = loai_tin::findOrFail($id);
            $loai_tin->update($request->all());
            return redirect()->back()->with('success', 'Cập nhật loại tin thành công!');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi cập nhật loại tin!');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        loai_tin::destroy($id);
        return back()->with('success', 'Thao tác thành công!');

    }
}
