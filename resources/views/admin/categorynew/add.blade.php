@extends('admin.master')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title">Thêm mới</h1>
            <hr class="mb-4">
            <div class="row g-4 settings-section">

                <div class="col-12 col-md-8">
                    <div class="app-card app-card-settings shadow-sm p-4">

                        <div class="app-card-body">
                            <form class="settings-form" action="{{ route('categorynews.add') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Tên Loại</label>
                                    <input type="text" class="form-control" name="ten_loai" value="{{ old('ten_loai') }}">
                                    @error('ten_loai')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                <button type="submit" class="btn app-btn-primary"  >Save Changes</button>
                            </form>
                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div>
            </div><!--//row-->
            <hr class="my-4">

        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection
