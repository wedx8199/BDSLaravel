@extends('main.master')
@section('content')
<style>
  

.form-group img{
    width: 100%;
    height: 450px;
}
.table th{
    background-color: #f0ebeb;
    border-style: outset;
    text-align: center;
}
.table td{
    border-style: outset;
}
.strokeme
{
    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;
    
}
.sticky {
position: -webkit-sticky; /* Safari & IE */
position: sticky;
top: 0;
  z-index: 1;
}
  
.ip5 {
    border-radius: 15px 15px;
    background: #3db057;
    padding: 5px; 
    width: 150px;
    text-align: center;
    color: white;
}
.ip6 {
    border-radius: 15px 15px;
    background: #314798;
    padding: 5px; 
    width: 150px;
    text-align: center;
    color: white;
}

</style>

    <div class="hero-wrap js-fullheight" style="background-image: url('source2/img/pngtree-mysterious-black-gold-real-estate-background-material-backgroundblack-goldvintage-backgroundbackground-image_82546.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('index')}}">Trang Chủ</a></span> <span>Nhà Đất</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Thông Tin Nhà Đất</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 sidebar">
<div class="sticky">
            <div class="sidebar-wrap ftco-animate">
              <h3 class="heading mb-4">Liên Hệ:</h3>
                <div class="fields">


<br>
@if($bds->dangdum_name != "" && $bds->dangdum_phone != "")

                        <div class="form-group">
                            <h5 class="mt-0 font700" style="font-weight: bold; text-align: center">{{$bds->dangdum_name}}</h5>
                        </div>
                  <div class="form-group">
                    <a href="tel://{{$bds->dangdum_phone}}"><button class="btn btn-success py-3 px-5"><i class="fa fa-phone"></i> {{$bds->dangdum_phone}}</button></a>
                    <a href="mailto:{{$owner->email}}"><button class="btn btn-light py-3 px-5"><i class="fa fa-envelope"></i> Gửi email</button></a>
                  </div>


@else
                        <div class="form-group">
                            <h5 class="mt-0 font700" style="font-weight: bold; text-align: center">{{$owner->name}}</h5>
                        </div>
                  <div class="form-group">
                    <a href="tel://{{$owner->phone}}"><button class="btn btn-success py-3 px-5"><i class="fa fa-phone"></i> {{$owner->phone}}</button></a>
                    <a href="mailto:{{$owner->email}}"><button class="btn btn-light py-3 px-5"><i class="fa fa-envelope"></i> Gửi email</button></a>
                  </div>


@endif
<br><br>
                  <div class="form-group">
            <a href="https://www.requa.com.vn/"><img src="https://i.ibb.co/LprbB3Z/banner.png" alt=""></a>
                  </div>
                  <div class="form-group">
            <a href="https://tiengruoi.link/"><img src="https://90phut.net/wp-content/uploads/2021/08/logo-90phut-tv-truc-tiep-bong-da.jpg" alt=""></a>
                  </div>

                </div>
              
            </div>
</div>
          </div>


          <div class="col-lg-9">
            <div class="row">
              <div class="col-md-12 ftco-animate">
                <div class="single-slider owl-carousel">
@foreach($pic as $p)
                  <div class="item">
                    <div class="hotel-img" style="background-image: url(source/image/{{$p->name}});"></div>
                  </div>
@endforeach
                </div>
              </div>
              <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                
                <h2 style="font-weight: bold;">{{$bds->name}}</h2>
                <p class="rate mb-5">
                  <span class="loc"><i class="icon-map"></i> {{$bds->address}}, {{$bds->district->name}}, <a href="{{route('city',$bds->city->id)}}">{{$bds->city->name}}</a></span>
                </p>
                  
                  

                  
                  
                  
<?php

function custom_number_format($n, $precision = 1) {
    if ($n < 1000000) {
        // Anything less than a million
        $n_format = number_format($n);
    } else if ($n < 1000000000) {
        // Anything less than a billion
        $n_format = number_format($n / 1000000, $precision) . ' Triệu';
    } else {
        // At least a billion
        $n_format = number_format($n / 1000000000, $precision) . ' Tỷ';
    }

    return $n_format;
}


$rightprice = custom_number_format($bds->price);



?>






                  <div class="d-md-flex mt-5 mb-5">
                      <ul>
@if($bds->loai == 2)
                                    <li><p style="font-weight: 900;">Giá:</p> <p class="strokeme" style="font-size: 35px;font-weight: bold;color:#ffba00;">{{$rightprice}} VNĐ / tháng</p></li>
@elseif($bds->price == 1)                 
                  <li><p style="font-weight: 900;">Giá:</p> <p class="strokeme" style="font-size: 35px;font-weight: bold;color:#ffba00;">Liên hệ</p></li>
@else                               
                                    <li><p style="font-weight: 900;">Giá:</p> <p class="strokeme" style="font-size: 35px;font-weight: bold;color:#ffba00;">{{$rightprice}} VNĐ <br> ({{ number_format($bds->price / $bds->dientich) }} VNĐ / m2)</p></li>
@endif  


                      </ul>
                      <ul class="ml-md-5" >
                          <li><p style="font-weight: 900;">Ngày đăng:</p> <p style="font-size: 35px">{{$bds->updated_at->format('d/m/Y')}}</p></li>
                      </ul>
                  </div>'

<h4 class="mb-4 ip5" style="font-weight: bold;">Mô Tả</h4>

<div style="border:1px solid black;padding: 10px;">
                  <p>{{$bds->name}} <br> {!! nl2br(e($bds->info)) !!}</p>
</div>
<br>
                  
<h4 class="mb-4 ip6" style="font-weight: bold;">Chi Tiết</h4>

<table class="table" name="table">
    <tbody>
        <tr>
          <th>Diện tích:</th>
            <td>{{$bds->dientich}} m2</td>
        </tr>
        <tr>
          <th>Loại BĐS:</th>
            <td>{{$bds->type->name}}</td>
        </tr>
        <tr>
          <th>Địa chỉ:</th>
            <td>{{$bds->address}}, {{$bds->district->name}}, {{$bds->city->name}}</td>
        </tr>
        <tr>
          <th>Loại tin:</th>
@if($bds->loai == 1)
            <td>Cần bán</td>
@elseif($bds->loai == 2)
            <td>Cho thuê</td>
@else
            <td>Cần mua/thuê</td>
@endif
        </tr>
    </tbody>
</table>                  
                  

              
              
              </div>


                    <ul class="list-inline share-buttons">
                        <li class="list-inline-item">Chia Sẻ:</li>
                        <li class="list-inline-item">
<a href=""><i class="fab fa-facebook-square"></i></a>
                        </li>
&nbsp
                        <li class="list-inline-item">
<button class="btn btn-dark" onclick="prompt('Ấn Ctrl + C','{{  Request::url() }}')"><i class="fa fa-paperclip"></i> Copy Link</button>
                        </li>
                    </ul>






@if($bds->youtube != "")
<?php
function get_youtube_id_from_url($url)  {
     preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $results);    return $results[6];
}


$a = get_youtube_id_from_url($bds->youtube);
      // or                   http://youtu.be/GvJehZx3eQ1 
      // or                   http://www.youtube.com/embed/GvJehZx3eQ1
      // or                   http://www.youtu.be/GvJehZx3eQ1/blabla?xyz
?>
              <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                <h4 class="mb-4 ip5" style="font-weight: bold;">Video</h4>
                <div class="block-16">
                  <figure>
<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$a}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </figure>
                </div>
              </div>
@else
@endif
        
              
              
              <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                <h4 class="mb-4 ip6" style="font-weight: bold;">Vị trí</h4>
                <div class="block-16">
                  <figure>
<iframe src="https://www.google.com/maps/embed/v1/place?key={{env('GOOGLE_MAPS_API_KEY')}}&q={{$bds->address}},{{$bds->district->name}},{{$bds->city->name}}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </figure>
                </div>
              </div>





              <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                    <h4 class="mb40 font500 ip5" style="font-weight: bold;">Liên hệ</h4>
                    <div class="media mb40">
                        <i class="d-flex mr-3 fa fa-user-circle fa-5x text-primary"></i>
@if($bds->dangdum_name != "" && $bds->dangdum_phone != "")

                        <div class="media-body">
                            <h5 class="mt-0 font700" style="font-weight: bold;">{{$bds->dangdum_name}}</h5>
                            <p>SĐT: <span style="font-weight: bold;">{{$bds->dangdum_phone}}</span></p>
                            <br><br>
                            Joined: {{$bds->created_at->format('d/m/Y')}}
                        </div>
@else
                        <div class="media-body">
                            <h5 class="mt-0 font700">{{$owner->name}}</h5>
                            <p>SĐT: {{$owner->phone}}</p>
                            <br>
                            <a href="{{route('viewpersonal',$owner->id)}}"><button class="btn btn-warning">Xem Thêm Các Bài Đăng Khác</button></a>
                            <br><br>
                            Joined: {{$owner->created_at->format('d/m/Y')}}
                        </div>
@endif

                    </div>
              </div>


              <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                <h4 class="mb-4" style="font-weight: bold;">Bất động sản cùng khu vực</h4>
                <div class="row">

@foreach($bds2 as $bdss2)
                  <div class="col-md-4">
                    <div class="destination">
                      <a href="{{route('viewpost',$bdss2->id)}}" class="img img-2" style="background-image: url(source/image/{{ App\File::where(['id_bds' => $bdss2->id])->first()->name }});"></a>
                      <div class="text p-3">
                        <div class="d-flex">
                          <div class="one">
                            <h3><a href="{{route('viewpost',$bdss2->id)}}">{{\Illuminate\Support\Str::limit($bdss2->name, 28)}}</a></h3>
                          </div>
                          <div class="two">
@if($bdss2->price == 1)
        <span class="price per-price">LIÊN HỆ</span> 
@elseif($bdss2->price < 1000000)
                <span class="price per-price">{{number_format($bdss2->price)}} VNĐ</span>
@elseif($bdss2->price < 1000000000)
                <span class="price per-price">{{number_format($bdss2->price/1000000, 1)}} Triệu VNĐ</span>
@else
                <span class="price per-price">{{number_format($bdss2->price/1000000000, 1)}} Tỷ VNĐ</span>
@endif

                          </div>
                        </div>
                        <p>{{$bdss2->type->name}}</p>
                        <hr>
                        <p class="bottom-area d-flex">
                          <span><i class="icon-map-o"></i> {{$bdss2->dientich}} m2</span> 
                          <span class="ml-auto"><a href="{{route('viewpost',$bdss2->id)}}">Xem Thêm</a></span>
                        </p>
                      </div>
                    </div>
                  </div>
@endforeach

                </div>
              </div>

              <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
                <h4 class="mb-4" style="font-weight: bold;">Bất động sản cùng TP</h4>
                <div class="row">

@foreach($bds3 as $bdss3)
                  <div class="col-md-4">
                    <div class="destination">
                      <a href="{{route('viewpost',$bdss3->id)}}" class="img img-2" style="background-image: url(source/image/{{ App\File::where(['id_bds' => $bdss3->id])->first()->name }});"></a>
                      <div class="text p-3">
                        <div class="d-flex">
                          <div class="one">
                            <h3><a href="{{route('viewpost',$bdss3->id)}}">{{\Illuminate\Support\Str::limit($bdss3->name, 28)}}</a></h3>
                          </div>
                          <div class="two">
@if($bdss3->price == 1)
        <span class="price per-price">LIÊN HỆ</span>
@elseif($bdss3->price < 1000000)
                <span class="price per-price">{{number_format($bdss3->price)}} VNĐ</span>
@elseif($bdss3->price < 1000000000)
                <span class="price per-price">{{number_format($bdss3->price/1000000, 1)}} Triệu VNĐ</span>
@else
                <span class="price per-price">{{number_format($bdss3->price/1000000000, 1)}} Tỷ VNĐ</span>
@endif

                          </div>
                        </div>
                        <p>{{$bdss3->type->name}}</p>
                        <hr>
                        <p class="bottom-area d-flex">
                          <span><i class="icon-map-o"></i> {{$bdss3->dientich}} m2</span> 
                          <span class="ml-auto"><a href="{{route('viewpost',$bdss3->id)}}">Xem Thêm</a></span>
                        </p>
                      </div>
                    </div>
                  </div>
@endforeach

                </div>
              </div>

            </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <a href="{{route('contact')}}"><h2>Liên Hệ Ngay Với Chúng Tôi</h2></a>

            </div>
          </div>
        </div>
      </div>
    </section>


@endsection