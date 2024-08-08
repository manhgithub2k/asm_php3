<div class="headerbottom p-2 ps-5 pe-5  ">
    <nav class="navbar navbar-expand-lg border-top border-bottom">
        <div class="container-fluid">

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" class="text-decoration-none text-black" href="{{route('trang-chu')}}"><i class="bi bi-house-fill  fs-3"></i></a>
              </li>

{{--                @foreach($categories as $categorie)--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('loai',['id'=>$categorie->id])}}">{{$categorie->ten_loai}}</a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}


              <li class="nav-item  ">
                <a class="nav-link" href="{{route('loai',['id'=>1])}}">Thời Sự</a>
              </li><li class="nav-item  ">
                <a class="nav-link" href="{{route('loai',['id'=>2])}}">Góc Nhìn</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="{{route('loai',['id'=>3])}}">Thế Giới</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="{{route('loai',['id'=>4])}}">Kinh Doanh</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="#">Thời Sự</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="#">Thời Sự</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="#">Thời Sự</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="#">Thời Sự</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="#">Thời Sự</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  News
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

            </ul>
            <form class="d-flex" role="search" method="GET" action="{{route('timkiem')}}">
              @csrf
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="key">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</div>
