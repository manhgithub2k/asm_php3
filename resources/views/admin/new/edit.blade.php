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
                            <form class="settings-form" action="{{ route('news.edit',$tin->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Tiêu Đề</label>
                                    <input type="text" class="form-control" name="tieu_de" value="{{ $tin->tieu_de  }}">
                                    @error('tieu_de')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Tóm tắt</label>
                                    <input type="text" class="form-control" name="tom_tat"  value="{{ $tin->tom_tat  }}">
                                    @error('tom_tat')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Nội Dung</label>
                                    <input type="text" class="form-control" name="noi_dung" value="{{ $tin->noi_dung  }}">
                                    @error('noi_dung')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Hình Ảnh</label>
                                    <input type="file" class="form-control" name="hinh_anh" >
                                    <img src="{{ \Storage::url($tin->hinh_anh) }}" style="width: 100px">
                                    @error('hinh_anh')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Loại Tin</label>
                                    <select name="id_loai" class="form-control">

                                        @foreach($listLoais as $loai)
                                            <option value="{{ $loai->id }}" {{ isset($tin->id_loai) && $tin->id_loai == $loai->id ? "selected" : '' }}>{{ $loai->ten_loai }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_loai')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Tác Giả</label>
                                    <input type="text" class="form-control" name="tac_gia" value="{{ $tin->tac_gia  }}">
                                    @error('tac_gia')
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
