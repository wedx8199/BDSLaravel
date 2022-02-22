@extends('main.master')
@section('content')



    <div class="hero-wrap js-fullheight" style="background-image: url('source2/img/pngtree-mysterious-black-gold-real-estate-background-material-backgroundblack-goldvintage-backgroundbackground-image_82546.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <section class="ftco-section justify-content-end ftco-search">
      <div class="container-wrap ml-auto">
        <div class="row no-gutters">
        <div class="col-md-12 nav-link-wrap">
        <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Tìm Kiếm Nhà Đất</a>
        </div>
        </div>
        <div class="col-md-12 tab-wrap">    
        <div class="tab-content p-4 px-5" id="v-pills-tabContent">  
          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
            <form method="get" id="searchform" action="{{route('search')}}" class="search-destination">
              <div class="row">

              <div class="col-md align-items-end">
                <div class="form-group">
                  <label for="#">Loại Bài Đăng</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>

<select class="form-control" name="loai" id="loai">
  <option selected value="1">Đăng bán</option>
  <option value="2">Cho thuê</option>
  <option value="3">Cần mua - thuê</option>
</select>

                      </div>
                  </div>
                </div>
              </div>


              <div class="col-md align-items-end">
                <div class="form-group">
                  <label for="#">Loại Đất</label>
                  <div class="form-field">
                    <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                  <select name="type" id="type" class="form-control">
  <option selected="false" value="">-- Chọn --</option>
@foreach($type as $t)
  <option value="{{$t->id}}">{{$t->name}}</option>
@endforeach
                  </select>

                  </div>
                  </div>
                </div>
              </div>



              <div class="col-md align-items-end">
                <div class="form-group">
                  <label for="#">Tỉnh/TP</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                      <select name="country" id="country" class="form-control">
  <option value="" selected="false">-- Chọn --</option>
@foreach($city as $ct)
  <option value="{{$ct->id}}">{{$ct->name}}</option>
@endforeach
                      </select>

                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md align-items-end">
                <div class="form-group">
                  <label for="#">Quận/Huyện</label>
                  <div class="form-field">
                    <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                  <select name="state" id="state" class="form-control">
<option value="" selected="false">-- Chọn --</option>
                  </select>

                  </div>
                  </div>
                </div>
              </div>
              <div class="col-md align-items-end">
                <div class="form-group">
                  <label for="#">Mức Giá</label>
                  <div class="form-field">
                    <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                  <select name="price" id="price" class="form-control">
  <option selected value="">-- Chọn --</option>
  <option value="1">Dưới 1 tỷ</option>
  <option value="2">1 - 2 tỷ</option>
  <option value="3">2 - 3 tỷ</option>
  <option value="4">3 - 5 tỷ</option>
  <option value="5">Trên 5 tỷ</option>
                  </select>

                  </div>
                  </div>
                </div>
              </div>
              <div class="col-md align-items-end">
                <div class="form-group">
                  <label for="#">Diện Tích</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                      <select name="area" id="area" class="form-control">
                          <option selected value="">-- Chọn --</option>
                          <option value="1">Dưới 30m2</option>
                          <option value="2">30-50m2</option>
                          <option value="3">50-100m2</option>
                          <option value="4">Trên 100m2</option>
                      </select>

                      </div>
                  </div>
                </div>
              </div>
              </div>

                        <select name="sort" id="sort" class="" hidden>
                          <option selected="" value="1">Thông thường</option>
                          <option value="2">Giá tăng dần</option>
                          <option value="3">Giá giảm dần</option>
                          <option value="4">Diện tích bé đến lớn</option>
                          <option value="5">Diện tích lớn đến bé</option>
                          <option value="6">Tin mới nhất</option>
                        </select>

                <div class="col-md align-self-end">
                  <div class="form-group">
                    <div class="form-field">
                    <input type="submit" value="🔍 Tìm Kiếm" class="form-control btn btn-primary">
                    </div>
                  </div>
                </div>

            </form>
          </div>
          

         
  
          
        </div>
        </div>
      </div>
      </div>
    </section>
        </div>
      </div>
    </div>









    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
@if(Auth::check() && Auth::user()->role == "admin")
      <button type="button" class="btn btn-info"><a href="{{route('admin')}}" style="color: cornsilk;"><i class="fas fa-user-cog"></i> Khu Vực Admin</a></button>
<br><br>
@else
@endif
            <h3 class="mb-4">NHÀ ĐẤT NỔI BẬT</h3>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">

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

@if($bdss->price == 1)
              <p class="rate" style="color: rgb(248, 0, 0);">LIÊN HỆ</p>
@elseif($bdss->price < 1000000)
                <p class="rate" style="color: rgb(248, 0, 0);">{{number_format($bdss->price)}} VNĐ  ({{ number_format($bdss->price / $bdss->dientich) }} đ / m2)</p>
@elseif($bdss->price < 1000000000)
                <p class="rate" style="color: rgb(248, 0, 0);">{{number_format($bdss->price/1000000, 1)}} Triệu VNĐ  ({{ number_format($bdss->price / $bdss->dientich) }} đ / m2)</p>

@else
                <p class="rate" style="color: rgb(248, 0, 0);">{{number_format($bdss->price/1000000000, 1)}} Tỷ VNĐ  ({{ number_format($bdss->price / $bdss->dientich) }} đ / m2)</p>
@endif




	    						</div>
	    						<div class="two">
	    							<span class="price">{{$bdss->dientich}} m2</span>
    							</div>
    						</div>
    						<p>{{$bdss->address}}, {{$bdss->district->name}}</p>
    						<hr>
    						<p class="bottom-area d-flex">
                  <span>{{$bdss->type->name}}</span>
    							<span class="ml-auto"><a href="{{route('viewpost',$bdss->id)}}">Xem Ngay</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
@endforeach
    		</div>




            <div class="row">
              


            </div>


			<button type="button" class="btn btn-primary" style="width: 300px; margin-left: 500px;"><a href="{{route('allpost')}}" style="color: cornsilk;">Xem Thêm</a></button>
    	</div>
    </section>

	<h3 style="text-align: center;">Tin Tức Nổi Bật</h3>
	<div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <img src="source2/img/banner/banner02.jpg">
            <p style="font-weight: 700; text-align: center; margin-top: 10px;"><a href="TinTuc.html" style="color: black;">Quần thể đại công viên ven sông quy mô nhất Đông Nam Á với diện tích lên đến 36 ha, 15 công viên đề tài độc đáo và màu sắc!</a></p>
            <p>Đại đô thị tiên phong ứng dụng công nghệ vào quản lý và vận hành. Công nghệ đấy là gì? Công nghệ trí tuệ nhân tạo (AI) và Internet vạn vật (IoT) giúp cuộc sống an toàn hơn, tối tân hơn, văn minh hơn</p>
            <img src="source2/img/banner/banner03.jpg">
            <p>Đại đô thị tiên phong ứng dụng công nghệ vào quản lý và vận hành. Công nghệ đấy là gì? Công nghệ trí tuệ nhân tạo (AI) và Internet vạn vật (IoT) giúp cuộc sống an toàn hơn, tối tân hơn, văn minh hơn</p>  
            <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
            <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Tỉnh/Thành Phố</h3>
@foreach($collection as $bdsc)
                <li><a href="{{route('city',$bdsc->city->id)}}">{{$bdsc->city->name}} <span>({{$bdsc->total}})</span></a></li>
@endforeach
              </div>
            </div>


            <div class="sidebar-box ftco-animate">
              <h3>Cần mua/thuê</h3>
@foreach($bds2 as $bdss2)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(source/image/{{ App\File::where(['id_bds' => $bdss2->id])->first()->name }});"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{route('viewpost',$bdss2->id)}}">{{$bdss2->name}}</a></h3>
                  <div class="meta">
                    <div><span class="icon-calendar"></span> {{$bdss2->created_at->format('d/m/Y')}}</div>

                    <div><span class="icon-person"></span> {{$bdss2->city->name}}</div>

                  </div>
                </div>
              </div>
@endforeach
            </div>




			<div class="sidebar-box ftco-animate">
				<h3 style="color: blue;">Bạn cần đăng thông tin mua bán nhà?</h3>
				<p>Chúng tôi cung cấp tin đăng mua bán, cho thuê bất động sản rõ ràng, thể hiện vị trí chính xác trên bản đồ</p>
				<button type="button" class="btn btn-primary"><a href="{{route('addpost')}}" style="color: rgb(255, 255, 255);">Đăng Tin Ngay</button></a>
			</div>
          </div>
		  	
        </div>
    </div>
		
	<section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(source2/img/banner/banner02.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Dịch vụ bất động sản cao cấp</h2>
        </div>
        <div>
  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-yatch"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"> An toàn cho bạn</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-around"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Các dự án trên khắp nơi</h3>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-compass"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Hướng dẫn chi tiết</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-map-of-roads"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Địa chỉ chính xác</h3>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Trang cá nhân nổi bật</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Vân Trường</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Nhật Minh</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Hồng Sơn</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Văn Nam</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Nam</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection