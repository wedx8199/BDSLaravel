	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<img class="headlogo" src="https://i.ibb.co/nLYNHXn/new2temp2.png">
	    	<!--<img src="https://i.ibb.co/3cFWxJM/test1.png">-->
	      <a class="navbar-brand" href="{{route('index')}}">&nbsp;Bất Động Sản</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Trang Chủ</a></li>
	          <li class="nav-item">
				<div class="dropdown show">
					<a class="nav-link dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nhà Đất Bán</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					  <a class="dropdown-item" href="{{route('allpost')}}">Tất cả</a>
					  @foreach($city as $ct)
					  <a class="dropdown-item" href="{{route('city',$ct->id)}}">{{$ct->name}}</a>
					  @endforeach
					</div>
				</div>
			  </li>	
	          <li class="nav-item">
				<div class="dropdown show">
					<a class="nav-link dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thuê</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					  <a class="dropdown-item" href="{{route('type2')}}">Tất cả</a>
					  @foreach($city as $ct)
					  <a class="dropdown-item" href="{{route('citytype2',$ct->id)}}">{{$ct->name}}</a>
					  @endforeach
					</div>
				</div>
			  </li>
	          <li class="nav-item"><a href="{{route('type3')}}" class="nav-link">Cần Mua-Thuê</a></li>
	          <li class="nav-item"><a href="TinTuc.html" class="nav-link">Tin Tức</a></li>
	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Liên Hệ</a></li>
@if(Auth::check())


	          <li class="nav-item">
				<div class="dropdown show">
					<a class="nav-link dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài Khoản</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					  <a class="dropdown-item" href="{{route('useredit',Auth::user()->id)}}">Thông Tin</a>
					  <a class="dropdown-item" href="{{route('viewedit',Auth::user()->id)}}">Bài Đăng</a>
					  <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-power-off"></i> Đăng Xuất</a>
					</div>
				</div>
			  </li>



@else
			  <li>
				<a href="{{route('login')}}"><button type="button" class="btn btn-light">Đăng Nhập</button></a>
			  </li>
@endif


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
