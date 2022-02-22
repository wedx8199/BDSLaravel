@extends('main.master')
@section('content')





    <div class="hero-wrap js-fullheight" style="background-image: url('source2/img/pngtree-mysterious-black-gold-real-estate-background-material-backgroundblack-goldvintage-backgroundbackground-image_82546.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('index')}}">Trang Chủ</a></span> <span>Cần Mua-Cần Thuê</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Cần Mua-Cần Thuê</h1>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar order-md-last ftco-animate">
        		<div class="sidebar-wrap ftco-animate">
        			<h3 class="heading mb-4">Địa Điểm</h3>
        			<form method="get" id="searchform" action="{{route('search')}}">
        				<div class="fields">
		              	<div class="form-group">
		                	<div class="select-wrap one-third">
	                    	<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    	<select name="loai" id="loai" class="form-control" placeholder="Keyword search">
  <option value="1">Đăng bán</option>
  <option value="2">Cho thuê</option>
  <option selected value="3">Cần mua - thuê</option>
	                    	</select>
	                  		</div>
		              	</div>
		              	<div class="form-group">
		                	<div class="select-wrap one-third">
	                    	<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    	<select name="type" id="type" class="form-control" placeholder="Keyword search">
	                      		<option selected="false" value="">Loại Đất</option>
@foreach($type as $t)
  <option value="{{$t->id}}">{{$t->name}}</option>
@endforeach
	                    	</select>
	                  		</div>
		              	</div>
		              	<div class="form-group">
		                	<div class="select-wrap one-third">
	                    	<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    	<select name="country" id="country" class="form-control" placeholder="Keyword search">
	                      		<option selected="false" value="">Tỉnh/Thành Phố</option>
@foreach($city as $ct)
  <option value="{{$ct->id}}">{{$ct->name}}</option>
@endforeach
	                    	</select>
	                  		</div>
		              	</div>
						<div class="form-group">
		                	<div class="select-wrap one-third">
	                    	<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    	<select name="state" id="state" class="form-control" placeholder="Keyword search">
	                      		<option value="" selected="false">Quận/Huyện</option>
	                    	</select>
	                  		</div>
		              	</div>
						  <div class="form-group">
		                	<div class="select-wrap one-third">
	                    	<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    	<select name="price" id="price" class="form-control" placeholder="Keyword search">
  <option selected value="">Mức Giá</option>
  <option value="1">Dưới 1 tỷ</option>
  <option value="2">1 - 2 tỷ</option>
  <option value="3">2 - 3 tỷ</option>
  <option value="4">3 - 5 tỷ</option>
  <option value="5">Trên 5 tỷ</option>
	                    	</select>
	                  		</div>
		              	</div>
						  <div class="form-group">
		                	<div class="select-wrap one-third">
	                    	<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    	<select name="area" id="area" class="form-control" placeholder="Keyword search">
                          <option selected value="">Diện Tích</option>
                          <option value="1">Dưới 30m2</option>
                          <option value="2">30-50m2</option>
                          <option value="3">50-100m2</option>
                          <option value="4">Trên 100m2</option>
	                    	</select>
	                  		</div>
		              	</div>
		              <div class="form-group">
		                <input type="submit" value="Tìm Kiếm" class="btn btn-primary py-3 px-5">
		              </div>
<br><br><br>
                  <div class="form-group">
            <a href="https://www.requa.com.vn/"><img src="https://i.ibb.co/LprbB3Z/banner.png" alt="" style="width: 100%; height: 450px;"></a>
                  </div>
		              
		            </div>
	            
        		</div>

          </div><!-- END-->
          <div class="col-lg-9">

	                    	<select name="sort" id="sort" class="" onchange="this.form.submit()">
                          <option value="1">Thông thường</option>
                          <option value="2">Giá tăng dần</option>
                          <option value="3">Giá giảm dần</option>
                          <option value="4">Diện tích bé đến lớn</option>
                          <option value="5">Diện tích lớn đến bé</option>
                          <option value="6">Tin mới nhất</option>
	                    	</select>
</form>
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