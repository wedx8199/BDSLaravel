@extends('main.master')
@section('content')



    <div class="hero-wrap js-fullheight" style="background-image: url('source2/img/pngtree-mysterious-black-gold-real-estate-background-material-backgroundblack-goldvintage-backgroundbackground-image_82546.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('index')}}">Trang Chủ</a></span> <span>Liên Hệ</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Liên Hệ</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4" style="font-weight: bold;">Thông Tin Liên Hệ</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span style="text-decoration: underline;">Địa Chỉ:</span> 69 Nguyễn Văn Công F3, Gò Vấp, TP Hồ Chí Minh</p>
          </div>
          <div class="col-md-3">
            <p><span style="text-decoration: underline;">Số Điện Thoại:</span> <a href="tel://0818817899">+84 818817899
            </a></p>
          </div>
          <div class="col-md-3">
            <p><span style="text-decoration: underline;">Email:</span> <a href="mailto:KNSsoftworks@gmail.com">knssoftworks@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span style="text-decoration: underline;">Website:</span> <a href="http://knssoftworks.com/">knssoftworks.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last pr-md-5">
            <form action="{{route('contact')}}" method="post">
            	@csrf
              <label for="fname" style="font-weight: bold;">Họ Và Tên</label>
              <input type="text" id="fname" name="name" placeholder="Họ Và Tên" required="" maxlength="50" style="border: 3px solid #16a085;">

              <label for="email" style="font-weight: bold;">Email</label>
              <input type="text" id="email" name="email" placeholder="Email" required="" maxlength="50" style="border: 3px solid #16a085;">
          
              <label for="sdt" style="font-weight: bold;">Số ĐIện Thoại</label><br>
              <input type="tel" id="sdt" name="sdt" placeholder="  Số Điện Thoại" style="border: 3px solid #16a085; height: 50px; width: 510px;" pattern="(\+84|0)\d{9,10}" required=""><br><br>

              <label for="subject" style="font-weight: bold;">Nội Dung</label>
              <textarea id="subject" name="subject" placeholder="Viết Nội Dung (Không quá 80 kí tự)" style="border: 3px solid #16a085; height:200px" required="" maxlength="80"></textarea>
          
              <input type="submit" value="Gửi">
            </form>
          
          </div>

          <div class="col-md-6">

          	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.8331586137297!2d106.6750099142873!3d10.82407686127338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528fd4488ee17%3A0x5fb854767b2a491a!2zNjkgTmd1eeG7hW4gVsSDbiBDw7RuZywgUGjGsOG7nW5nIDMsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1631542654060!5m2!1svi!2s" width="100%" height="450" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
          	
          </div>
        </div>
      </div>
    </section>

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