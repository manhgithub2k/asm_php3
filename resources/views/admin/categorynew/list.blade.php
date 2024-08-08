@extends('admin.master')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <h1 class="app-page-title">Thêm mới</h1>
    <hr class="mb-4">
    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Tên Loại</th>

                                <th class="cell">Thao Tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listLoais as $loai)
                                <tr>
                                    <td class="cell">{{ $loai->id }}</td>
                                    <td class="cell"><span class="truncate">{{ $loai->ten_loai }}</span></td>

                                    <td class="cell d-flex align-center">
                                        <a class="btn btn-warning h-50 mt-3 me-2" href="{{ route('categorynews.edit',['id'=> $loai->id]) }}">Edit</a>
                                        <form action="{{ route('categorynews.delete', ['id'=> $loai->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure!')"
                                                    class="btn btn-danger mt-3">Delete</button>
                                        </form>
                                    </td>
                                    {{--                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                </div><!--//app-card-body-->


    </div>
@endsection
