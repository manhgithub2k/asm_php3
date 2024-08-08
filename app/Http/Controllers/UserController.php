<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return response()->json([
                'message' => 'Chi tiết  ID :  ' . $id,
                'data' => $user
            ]);
        } catch (\Throwable $th) {

            if ($th instanceof ModelNotFoundException) {
                return response()->json([
                    'message' => 'Không Tìm Thấy  ID :  ' . $id

                ],
                    Response::HTTP_NOT_FOUND
                );
            }
        }
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }


    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json([
            'message' => 'Update thành công : ' . $id,
            'data' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::destroy($id);
        return response()->json([
            'message' => 'Đã xóa thành công ',

        ]);
    }
}
