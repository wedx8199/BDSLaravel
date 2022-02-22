        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->

            <li class="nav-item">
                <a class="nav-link" href="{{route('type2')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Nhà đất cho thuê</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('type3')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Cần mua/thuê</span></a>
            </li>


            <hr class="sidebar-divider">
            <li class="nav-item">
            <a class="nav-link"><span>Bán</span></a>
            </li>
@foreach($city as $ct)
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse1"
                    aria-expanded="true" aria-controls="collapse1">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>{{$ct->name}}</span>
                </a>
                <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('city',$ct->id)}}">Toàn TP {{$ct->name}}</a>
                        @foreach($ct->district as $dist)
                        <a class="collapse-item" href="{{route('quan',$dist->id)}}">{{$dist->name}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
@endforeach











            <hr class="sidebar-divider">
            <li class="nav-item">
            <a class="nav-link"><span>Thuê</span></a>
            </li>
@foreach($city as $ct)
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse2"
                    aria-expanded="true" aria-controls="collapse2">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>{{$ct->name}}</span>
                </a>
                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('citytype2',$ct->id)}}">Toàn TP {{$ct->name}}</a>
                        @foreach($ct->district as $dist)
                        <a class="collapse-item" href="{{route('quantype2',$dist->id)}}">{{$dist->name}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
@endforeach






            <hr class="sidebar-divider">
                        @if(Auth::check() && Auth::user()->role == "admin")
            <li class="nav-item">
                <a class="nav-link" href="{{route('manage_bds')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>BDS Manage</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('manage_city')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>City Manage</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('manage_district')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>District Manage</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('manage_type')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Type Manage</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('manage_user')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>User Manage</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('manage_dt')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Doanh Thu</span></a>
            </li>
                        @else
                        @endif



            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>