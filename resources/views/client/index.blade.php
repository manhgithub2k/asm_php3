@extends('client.layout.master')
@section('title', 'Trang chủ')
@section('content')
<div class="row h-100  border-bottom" >
    <div class="col-9 ">
        <div id="tinhot">
            <div class=" d-flex p-3">
              <a href="{{route('tin',['id'=>$tinHot[0]->id])}}" class=" text-decoration-none text-black">

                <div class="w-100 image "> <img src="{{ \Storage::url($tinHot[0]->hinh_anh) }}" class="card-img-top" alt="..." >
                </div>
                @php

                @endphp
                <div class="card-body w-25 ms-4">
                  <h5 class="card-title">{{$tinHot[0]->tieu_de}}</h5>
                  <p class="card-text m-3">{{$tinHot[0]->tom_tat}}</p>
                  <a href="#" class="btn btn-danger">Tin Hot</a>
                </div>
              </div>
              </a>

        </div>
    </div>
    <div class="col-3 ">
      <div id="tinnoi">
          <div class="row  p-3 ">
            <a href="{{route('tin',['id'=>$tinHot[1]->id])}}" class=" text-decoration-none text-black d-flex">
              <div class=" image "> <img src="{{ \Storage::url($tinHot[1]->hinh_anh)  }}" class="card-img-top" alt="..." >
              </div>
              <div class="card-body w-25 ms-4">
                <h5 class="card-title fs-6">{{$tinHot[1]->tieu_de}}</h5>
              </div>
            </a>
          </div>
          <div class="row  p-3 ">
            <a href="{{route('tin',['id'=>$tinHot[2]->id])}}" class=" text-decoration-none text-black d-flex">
              <div class=" image "> <img src="{{asset($tinHot[2]->hinh_anh)}}" class="card-img-top" alt="..." >
              </div>
              <div class="card-body w-25 ms-4">
                <h5 class="card-title fs-6">{{$tinHot[2]->tieu_de}}</h5>
              </div>
            </a>
          </div>
          <div class="row  p-3 ">
            <a href="{{route('tin',['id'=>$tinHot[3]->id])}}" class=" text-decoration-none text-black d-flex">
              <div class=" image "> <img src="{{asset($tinHot[3]->hinh_anh)}}" class="card-img-top" alt="..." >
              </div>
              <div class="card-body w-25 ms-4">
                <h5 class="card-title fs-6">{{$tinHot[3]->tieu_de}}</h5>
              </div>
            </a>
          </div>

      </div>

    </div>
</div>
{{--<div class="headerbottom p-2 ps-5 pe-5  ">--}}
{{--  <nav class="navbar navbar-expand-lg ">--}}
{{--      <div class="container-fluid">--}}

{{--        <div class="collapse navbar-collapse " id="navbarSupportedContent">--}}
{{--          <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">--}}

{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item  ">--}}
{{--              <a class="nav-link" href="#">Thời Sự</a>--}}
{{--            </li>--}}


{{--          </ul>--}}

{{--        </div>--}}
{{--      </div>--}}
{{--    </nav>--}}
{{--</div>--}}
{{--<div class="row tinloai">--}}
{{--  <div class="container text-center">--}}
{{--    <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">--}}

{{--      <div class="col">--}}
{{--        <a href="" class=" text-decoration-none text-black">--}}
{{--          <div class="title">--}}
{{--            <h5 class="card-title fs-6 text-start ">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>--}}
{{--          </div>--}}
{{--          <div class="row d-flex p-3 ">--}}
{{--            <div class=" image col ">--}}
{{--              <img src="{{asset('image/bfc2b1b3ac6690e6a716193132a41a09.jpg')}}" class="card-img-top" alt="..." >--}}
{{--            </div>--}}
{{--            <div class="card-body w-25 ms-4 col">--}}
{{--              <p class="card-text text-start fs-6">Dù trúng số 3,6 tỷ đồng, chuyên gia khuyên chưa nên nghỉ hưu ở tuổi 30, cần thêm thời gian tích lũy tài sản và đầu tư hợp lý. </p>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col">--}}
{{--        <a href="" class=" text-decoration-none text-black">--}}
{{--          <div class="title">--}}
{{--            <h5 class="card-title fs-6 text-start ">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>--}}
{{--          </div>--}}
{{--          <div class="row d-flex p-3 ">--}}
{{--            <div class=" image col ">--}}
{{--              <img src="{{asset('image/bfc2b1b3ac6690e6a716193132a41a09.jpg')}}" class="card-img-top" alt="..." >--}}
{{--            </div>--}}
{{--            <div class="card-body w-25 ms-4 col">--}}
{{--              <p class="card-text text-start fs-6">Dù trúng số 3,6 tỷ đồng, chuyên gia khuyên chưa nên nghỉ hưu ở tuổi 30, cần thêm thời gian tích lũy tài sản và đầu tư hợp lý. </p>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col">--}}
{{--        <a href="" class=" text-decoration-none text-black">--}}
{{--          <div class="title">--}}
{{--            <h5 class="card-title fs-6 text-start ">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>--}}
{{--          </div>--}}
{{--          <div class="row d-flex p-3 ">--}}
{{--            <div class=" image col ">--}}
{{--              <img src="{{asset('image/bfc2b1b3ac6690e6a716193132a41a09.jpg')}}" class="card-img-top" alt="..." >--}}
{{--            </div>--}}
{{--            <div class="card-body w-25 ms-4 col">--}}
{{--              <p class="card-text text-start fs-6">Dù trúng số 3,6 tỷ đồng, chuyên gia khuyên chưa nên nghỉ hưu ở tuổi 30, cần thêm thời gian tích lũy tài sản và đầu tư hợp lý. </p>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col">--}}
{{--        <a href="" class=" text-decoration-none text-black">--}}
{{--          <div class="title">--}}
{{--            <h5 class="card-title fs-6 text-start ">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>--}}
{{--          </div>--}}
{{--          <div class="row d-flex p-3 ">--}}
{{--            <div class=" image col ">--}}
{{--              <img src="{{asset('image/bfc2b1b3ac6690e6a716193132a41a09.jpg')}}" class="card-img-top" alt="..." >--}}
{{--            </div>--}}
{{--            <div class="card-body w-25 ms-4 col">--}}
{{--              <p class="card-text text-start fs-6">Dù trúng số 3,6 tỷ đồng, chuyên gia khuyên chưa nên nghỉ hưu ở tuổi 30, cần thêm thời gian tích lũy tài sản và đầu tư hợp lý. </p>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col">--}}
{{--        <a href="" class=" text-decoration-none text-black">--}}
{{--          <div class="title">--}}
{{--            <h5 class="card-title fs-6 text-start ">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>--}}
{{--          </div>--}}
{{--          <div class="row d-flex p-3 ">--}}
{{--            <div class=" image col ">--}}
{{--              <img src="{{asset('image/bfc2b1b3ac6690e6a716193132a41a09.jpg')}}" class="card-img-top" alt="..." >--}}
{{--            </div>--}}
{{--            <div class="card-body w-25 ms-4 col">--}}
{{--              <p class="card-text text-start fs-6">Dù trúng số 3,6 tỷ đồng, chuyên gia khuyên chưa nên nghỉ hưu ở tuổi 30, cần thêm thời gian tích lũy tài sản và đầu tư hợp lý. </p>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--      <div class="col">--}}
{{--        <a href="" class=" text-decoration-none text-black">--}}
{{--          <div class="title">--}}
{{--            <h5 class="card-title fs-6 text-start ">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>--}}
{{--          </div>--}}
{{--          <div class="row d-flex p-3 ">--}}
{{--            <div class=" image col ">--}}
{{--              <img src="{{asset('image/bfc2b1b3ac6690e6a716193132a41a09.jpg ')}}" class="card-img-top" alt="..." >--}}
{{--            </div>--}}
{{--            <div class="card-body w-25 ms-4 col">--}}
{{--              <p class="card-text text-start fs-6">Dù trúng số 3,6 tỷ đồng, chuyên gia khuyên chưa nên nghỉ hưu ở tuổi 30, cần thêm thời gian tích lũy tài sản và đầu tư hợp lý. </p>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--        </a>--}}
{{--      </div>--}}

{{--    </div>--}}
{{--  </div>--}}

{{--</div>--}}
<section class="myNews mt-5">
    <div class="container mb-3">
        <div class="row">
            <h3 class="font-text4 fw-semibold">
                Bài viết mới
            </h3>
        </div>
        <div class="row mt-3">
            @foreach ($tinHot as $tin)
                <div class="col-md-3">
                    <div class="row">
                        <img src="{{ \Storage::url($tin->hinh_anh) }}" alt="" style="width: 500px; height: 200px">
                    </div>
                    <div class="row">
                        <h5 class="font-text3 fw-semibold pt-2">
                            {{ $tin->tieu_de}}
                        </h5>
                    </div>
                    <div class="row">
{{--                        <div class="col-9 pt-2 font-text5">{{ $tin->category_name }}</div>--}}
                        <div class="col-3">
                            <a class="btn btn-outline-dark" href="{{route('tin',['id'=>$tinHot[2]->id])}}">Đọc</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <hr class="mt-5">
    </div>
</section>

@endsection
