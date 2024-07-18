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
    public function store(Storeloai_tinRequest $request)
    {
        //
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
    public function edit(loai_tin $loai_tin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateloai_tinRequest $request, loai_tin $loai_tin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(loai_tin $loai_tin)
    {
        //
    }
}
