                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" role="search" method="get" id="searchform" action="{{route('search')}}">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2" name="searchbox">
<select class="form-select" name="loai" id="loai">
  <option selected value="1">Đăng bán</option>
  <option value="2">Cho thuê</option>
  <option value="3">Cần mua - thuê</option>
</select>



<select id="country" class="form-select" name="country">
  <option value="" selected="false">-- Select --</option>
@foreach($city as $ct)
  <option value="{{$ct->id}}" {{ request()->get("country") == $ct->id  ? "selected" : "" }}>{{$ct->name}}</option>
@endforeach
</select>

<select id="state" class="form-select" name="state">
    <option value="" selected="false">-- Select --</option>
</select>

<select class="form-select" name="type">
  <option selected="false" value="">-- Select --</option>
@foreach($type as $t)
  <option value="{{$t->id}}" {{ request()->get("type") == $t->id  ? "selected" : "" }}>{{$t->name}}</option>
@endforeach
</select>


<select class="form-select" name="price" id="price">
  <option selected value="">-- Select --</option>
  <option value="1">Dưới 1 tỷ</option>
  <option value="2">1 - 2 tỷ</option>
  <option value="3">2 - 3 tỷ</option>
  <option value="4">3 - 5 tỷ</option>
  <option value="5">Trên 5 tỷ</option>
</select>

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>





                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        @if(Auth::check())
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="https://cdn.iconscout.com/icon/free/png-256/user-1648810-1401302.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('useredit',Auth::user()->id)}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{route('viewedit',Auth::user()->id)}}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Posts
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        @else
							
							<li><a href="{{route('login')}}"><i class="fa fa-key"></i> Đăng nhập</a></li>
                        @endif

                    </ul>

                </nav>