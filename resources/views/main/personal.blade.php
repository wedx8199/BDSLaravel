@extends('main.master')
@section('content')





    <div class="hero-wrap js-fullheight" style="background-image: url('source2/img/pngtree-mysterious-black-gold-real-estate-background-material-backgroundblack-goldvintage-backgroundbackground-image_82546.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('index')}}">Trang Chủ</a></span> <span>Nhà Đất</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Nhà Đất</h1>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar order-md-last ftco-animate">
        		<div class="sidebar-wrap ftco-animate">
        			<h3 class="heading mb-4">Bài Đăng Bởi:</h3>
        			
        				<div class="fields">
<div style="text-align:center;">
<i class="d-flex mr-3 fa fa-user-circle fa-5x text-primary"></i>
</div>
<br>
                        <div class="form-group">
                            <h5 class="mt-0 font700" style="font-weight: bold; text-align: center">{{$owner->name}}</h5>
                        </div>

                  <div class="form-group">
                    <a href="tel://{{$owner->phone}}"><button class="btn btn-success py-3 px-5"><i class="fa fa-phone"></i> {{$owner->phone}}</button></a>
                    <a href="mailto:{{$owner->email}}"><button class="btn btn-light py-3 px-5"><i class="fa fa-envelope"></i> Gửi email</button></a>
                  </div>
<br><br><br>
                  <div class="form-group">
            <a href="https://www.requa.com.vn/"><img src="https://i.ibb.co/LprbB3Z/banner.png" alt="" style="width: 100%; height: 450px;"></a>
                  </div>
                  
		            </div>
	            
        		</div>

          </div><!-- END-->
          <div class="col-lg-9">


          	<div class="row">
          		@foreach($bds as $bdss)
          				<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="{{route('viewpost',$bdss->id)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(source/image/{{ App\File::where(['id_bds' => $bdss->id])->first()->name }});">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-link"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="{{route('viewpost',$bdss->id)}}">{{\Illuminate\Support\Str::limit($bdss->name, 28)}}</a></h3>
			    						</div>

@if($bdss->loai == 2)
			    						<div class="two">
	@if($bdss->price == 1)
							<span class="price">LIÊN HỆ</span>
	@elseif($bdss->price < 1000000)
			    			<span class="price">{{number_format($bdss->price)}} VNĐ/Tháng</span>
	@elseif($bdss->price < 1000000000)
			    			<span class="price">{{number_format($bdss->price/1000000, 1)}} Triệu VNĐ/Tháng</span>

	@else
			    			<span class="price">{{number_format($bdss->price/1000000000, 1)}} Tỷ VNĐ/Tháng</span>
	@endif

		    							</div>

@else
			    						<div class="two">
	@if($bdss->price == 1)
							<span class="price">LIÊN HỆ</span>
	@elseif($bdss->price < 1000000)
			    			<span class="price">{{number_format($bdss->price)}} VNĐ</span>
	@elseif($bdss->price < 1000000000)
			    			<span class="price">{{number_format($bdss->price/1000000, 1)}} Triệu VNĐ</span>

	@else
			    			<span class="price">{{number_format($bdss->price/1000000000, 1)}} Tỷ VNĐ</span>
	@endif

		    							</div>
@endif
		    						</div>
		    						<p class="days"><span>{{$bdss->dientich}} m2</span></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> {{$bdss->district->name}} - {{$bdss->city->name}}</span> 
		    							<span class="ml-auto"><a href="{{route('viewpost',$bdss->id)}}">Xem Ngay</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
@endforeach
          	</div>
          	<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li>{{$bds->links()}}</li>
		              </ul>
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