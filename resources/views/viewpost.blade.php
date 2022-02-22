@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        @if(Auth::check())
                        <a href="{{route('addpost')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create BDS</a>
                        @else
                        @endif
                    </div>





<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mb40">
            <article>
@foreach($pic as $p)
                <img src="source/image/{{$p->name}}" alt="" class="img-fluid mb30">
                <br><br>
@endforeach
                <div class="post-content">
                    <h3>{{$bds->name}}</h3>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">{{$bds->address}} {{$bds->district->name}}, {{$bds->city->name}}</a>
                        </li>



@if($bds->loai == 2)

                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#">{{number_format($bds->price)}} VNĐ / tháng</a>
                        </li>

@else


                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#">{{number_format($bds->price)}} VNĐ</a>
                        </li>


@endif




                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a href="#">{{$bds->dientich}} m2</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-clock-o"></i> <a href="#">{{$bds->updated_at->format('d/m/Y')}}</a>
                        </li>
                    </ul>
                    <p class="lead">{!! nl2br(e($bds->info)) !!}</p>
                    
                    <ul class="list-inline share-buttons">
                        <li class="list-inline-item">Share Post:</li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-facebook si-gray-round">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
<button class="btn btn-link" onclick="prompt('Press Ctrl + C to copy','{{  Request::url() }}')"><i class="fa fa-paperclip"></i>Copy Link</button>
                        </li>
                    </ul>
                    <hr class="mb40">
                    <h4 class="mb40 text-uppercase font500">Liên hệ</h4>
                    <div class="media mb40">
                        <i class="d-flex mr-3 fa fa-user-circle fa-5x text-primary"></i>
@if($bds->dangdum_name != "" && $bds->dangdum_phone != "")

                        <div class="media-body">
                            <h5 class="mt-0 font700">{{$bds->dangdum_name}}</h5>
                            {{$bds->dangdum_phone}}
                            <br><br>
                            Joined: {{$bds->created_at->format('d/m/Y')}}
                        </div>
@else
                        <div class="media-body">
                            <h5 class="mt-0 font700">{{$owner->name}}</h5>
                            {{$owner->phone}}
                            <br><br>
                            Joined: {{$owner->created_at->format('d/m/Y')}}
                        </div>
@endif

                    </div>


                </div>
            </article>
            <!-- post article-->

        </div>

    </div>
</div>
















                </div>
@endsection