@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        @if(Auth::check())
                        <a href="{{route('addpost')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create BDS</a>
                        @if(Auth::user()->role == "admin")
                        <a href="{{route('admin')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Admin Manage</a>
                        @else
                        @endif




                        @else
                        @endif


                    </div>



                <div class="container-fluid">


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Sold</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($bdsoff)}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Total)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($bdsoff->sum('price') * 2 / 100)}} đ</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">BDS Online
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($bds)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($user)}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>












                </div>












                    <!-- Content Row -->
                    <div class="row">


                        <div class="col-lg-6 mb-4">

                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Các bài đăng bán</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
@foreach($collection as $bdsc)
                                    <h4 class="small font-weight-bold">{{$bdsc->city->name}} <span
                                            class="float-right">{{$bdsc->total}}</span></h4>
@endforeach
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="col-lg-6 mb-4">

                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Các bài đăng thuê</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
@foreach($collection2 as $bdsc2)
                                    <h4 class="small font-weight-bold">{{$bdsc2->city->name}} <span
                                            class="float-right">{{$bdsc2->total}}</span></h4>
@endforeach
                                    </div>
                                </div>
                            </div>

                        </div>




                        <div class="col-lg-6 mb-4">

                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Các bài đăng cần mua/thuê</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
@foreach($collection3 as $bdsc3)
                                    <h4 class="small font-weight-bold">{{$bdsc3->city->name}} <span
                                            class="float-right">{{$bdsc3->total}}</span></h4>
@endforeach
                                    </div>
                                </div>
                            </div>

                        </div>



                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Khách hàng yêu cầu liên hệ</h6>
                                </div>
                                <div class="card-body">
@foreach($contact as $ct)
                                    <h4 class="small font-weight-bold">{{$ct->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$ct->email}}<span class="float-right">{{$ct->phone}}</span></h4>
@endforeach
                                    <a href="{{route('manage_lh')}}"><h4 class="small font-weight-bold">Xem thêm</h4></a>
                                </div>
                            </div>



                        </div>


                    </div>















@endsection