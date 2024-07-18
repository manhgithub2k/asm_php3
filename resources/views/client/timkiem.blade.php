@extends('client.layout.master')
@section('title', 'Tin Loại')
@section('content')
<div class="headerbottom p-2 pe-5  ">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
              
              <li class="nav-item fs-3 border-bottom">
                <a class="nav-link" href="">{{$tenLoai}}</a>
              </li>
            
              @php
                
              @endphp
              
              
            </ul>
            
          </div>
        </div>
      </nav>
</div>
<div class="row tinloai">
    <div class="container text-center">
      <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
        @foreach ($loai as $tin)
         
         <div class="col">
          <a href="{{route('tin',['id'=>$tin->id])}}" class=" text-decoration-none text-black">
            <div class="title">
              <h5 class="card-title fs-6 text-start ">{{$tin->tieu_de}}</h5>
            </div>
            <div class="row d-flex p-3 ">
              <div class=" image col ">
                <img src="{{asset($tin->hinh_anh)}}" class="card-img-top" alt="..." >
              </div>
              <div class="card-body w-25 ms-4 col">                       
                <p class="card-text text-start fs-6">{{$tin->tom_tat}}</p>
              </div>
            
            </div>
          </a>                     
        </div>
        @endforeach
       
  
        
  
      </div>
    </div>
  
  </div>

    
@endsection