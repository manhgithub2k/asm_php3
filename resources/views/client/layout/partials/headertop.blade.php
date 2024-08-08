
@php
  $currentDate = date('d/m/Y');

$thu = date('l');
 @endphp
<div class="headertop p-2 ps-5 pe-5">
    <div class="row align-items-center">
        <div class="col-3">
            <div class="row ">

                <div class="col-6 "><img src="{{ \Storage::url('image/logo_vietnews.png')}}" alt="" id="logo"></div>
                <div class="col-6 mt-3"><p>{{ $thu }}, {{ $currentDate  }}</p></div>

            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-5 ">
            <div class="row align-items-center ">
                <div class="col-2 "><p>Tin Hot</p></div>
                <div class="col-4  "><p>Tin Xem Nhiều</p></div>
                @if(Auth::check())
                    <div class="col-3 mb-3  "><a class="text-decoration-none text-body-emphasis" href="{{ route('lay-pass') }}">Hi,{{ Auth::user()->name }} </a></div>
                    <div class="col-3 mb-3  "><a class="text-decoration-none text-body-emphasis" href="{{ route('logout') }}">Đăng Xuất</a></div>
                @else
                <div class="col-3 mb-3  "><a class="text-decoration-none text-body-emphasis" href="{{ route('login') }}">Đăng Nhập</a></div>
                <div class="col-3 mb-3  "><a class="text-decoration-none text-body-emphasis" href="{{ route('register') }}">Đăng Ký</a></div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
