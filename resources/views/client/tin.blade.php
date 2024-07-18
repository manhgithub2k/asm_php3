@extends('client.layout.master')
@section('title', 'Tin Loại')
@section('content')
<div class="row h-100  border-bottom" >
    <div class="col-9 ">
        <div class="tinchitiet">
            <div class="mt-4 mb-5">
                <h1 class="card-title">{{$tin->tieu_de}} </h1>
            </div>
            <div class="card-body  m-4">
                <p class="card-text mt-3">{{$tin->tom_tat}} </p>
            </div>
            <div class="w-100 image "> <img src="{{asset($tin->hinh_anh)}}" class="card-img-top" alt="..." >
            </div>
            <div class="card-body  m-4">
                <p class="card-text mt-3">{{$tin->noi_dung}}</p>
            </div>
           
              
              
        </div>
    </div>
    <div class="col-3 ">
      <div id="tinnoi">
        <div class="row d-flex p-3 ">
            <div class=" image "> <img src="../public/image/bfc2b1b3ac6690e6a716193132a41a09.jpg" class="card-img-top" alt="..." >
            </div>
            <div class="card-body w-25 ms-4">
              <h5 class="card-title fs-6">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>
              
            </div>
          </div>
          <div class="row d-flex p-3 ">
            <div class=" image "> <img src="../public/image/bfc2b1b3ac6690e6a716193132a41a09.jpg" class="card-img-top" alt="..." >
            </div>
            <div class="card-body w-25 ms-4">
              <h5 class="card-title fs-6">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>
              
            </div>
          </div>  
          <div class="row d-flex p-3 ">
            <div class=" image "> <img src="../public/image/bfc2b1b3ac6690e6a716193132a41a09.jpg" class="card-img-top" alt="..." >
            </div>
            <div class="card-body w-25 ms-4">
              <h5 class="card-title fs-6">Có nên nghỉ hưu ở tuổi 30 sau khi trúng độc đắc 3,6 tỷ đồng?</h5>
              
            </div>
          </div> 
      </div>
        
    </div>
</div>

    
@endsection