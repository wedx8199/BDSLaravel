@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">{{$name->name}}</h1>
                        @if(Auth::check())
                        <a href="{{route('addpost')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create BDS</a>
                        @else
                        @endif
                    </div>
<!-- <form method="get" action="{{route('quan',request()->id)}}" enctype="multipart/form-data">
  @csrf
<label for="type">BDS Type:</label>
<select id="type" class="form-control" name="type">
  <option value="" selected>-- Choose --</option>
@foreach($type as $type)
  <option value="{{$type->id}}">{{$type->name}}</option>
@endforeach
</select>
  <button type="submit" class="btn btn-primary">Pick Type</button>
</form>
<br>
<br> -->



<ul class="aside-menu">
              <li><a href="{{route('sortpriceupquan',request()->id)}}"><i class="fa fa-arrow-up"></i>Sắp xếp theo giá tăng dần</a></li>
              <li><a href="{{route('sortpricedownquan',request()->id)}}"><i class="fa fa-arrow-down"></i>Sắp xếp theo giá giảm dần</a></li>
              <li><a href="{{route('sortareaupquan',request()->id)}}"><i class="fa fa-sort-alpha-asc"></i>Diện tích bé đến lớn</a></li>
              <li><a href="{{route('sortareadownquan',request()->id)}}"><i class="fa fa-sort-alpha-desc"></i>Diện tích lớn đến bé</a></li>
              <li><a href="{{route('sortlatestquan',request()->id)}}"><i class="fa fa-clock-o"></i>Tin mới nhất</a></li>
            </ul>






<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">City</th>
      <th scope="col">Price</th>
      <th scope="col">Type</th>
      <th scope="col">Area (m2)</th>
    </tr>
  </thead>
  <tbody>
@foreach($bds as $bdss)
    <tr>
      <th scope="row">{{$bdss->id}}</th>
      <td>{{$bdss->name}}</td>
      <td>{{$bdss->address}}</td>
      <td>{{$bdss->district->name}}</td>
      <td>{{$bdss->city->name}}</td>
      <td>{{number_format($bdss->price)}} VNĐ  ({{ number_format($bdss->price / $bdss->dientich) }} đ / m2)
</td>
      <td>{{$bdss->type->name}}</td>
      <td>{{$bdss->dientich}}</td>
<td><a href="{{route('viewpost',$bdss->id)}}"><button type="button" class="btn btn-secondary">View</button></a></td>
<!-- <td><button type="button" class="btn btn-success">Edit</button></td>
<td><button type="button" class="btn btn-danger">Delete</button></td> -->
    </tr>
@endforeach
  </tbody>
</table>




<div class="row">{{$bds->links()}}</div>







                </div>
@endsection