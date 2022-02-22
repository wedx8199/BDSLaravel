@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage BDS Posts</h1>
                        @if(Auth::check() && Auth::user()->role == "admin")
                        <a href="{{route('addpost')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create BDS For Customer</a>
                        @elseif(Auth::check())
                        <a href="{{route('addpost')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create BDS</a>
                        @endif
                    </div>





<!--<input name="radio" type="checkbox" id="onl_1" onClick="toggleTables('4')" value="radio" checked="checked" />
<label for="radio"></label> BDS đang rao bán&nbsp;&nbsp;&nbsp;
<input name="radio" type="checkbox" id="rent_1" onClick="toggleTables('3')" value="radio" /> 
BDS đang rao thuê&nbsp;&nbsp;&nbsp;
<input name="radio" type="checkbox" id="need_1" onClick="toggleTables('2')" value="radio" /> 
BDS cần mua/thuê&nbsp;&nbsp;&nbsp;
<input name="radio" type="checkbox" id="off_1" onClick="toggleTables('1')" value="radio" /> 
Đã xong-->

<div id="myRadioGroup">
<input type="radio" name="cars" checked="checked" value="twoCarDiv"  />
BDS đang rao bán&nbsp;&nbsp;&nbsp;
<input type="radio" name="cars" value="threeCarDiv" />
BDS đang rao thuê&nbsp;&nbsp;&nbsp;
<input type="radio" name="cars" value="fourCarDiv" />
BDS cần mua/thuê&nbsp;&nbsp;&nbsp;
<input type="radio" name="cars" value="fiveCarDiv" />
Đã xong
</div>









                <div id="twoCarDiv" class="card shadow mb-4 desc">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">BDS BÁN</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>District</th>
                                        <th>City</th>
                                        <th>Price</th>
                                        <th>Area (m2)</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>District</th>
                                        <th>City</th>
                                        <th>Price</th>
                                        <th>Area (m2)</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
@foreach($bds as $bds)
                                        <tr>
      <td>{{$bds->id}}</td>
      <td>{{$bds->name}}</td>
      <td>{{$bds->address}}</td>
      <td>{{$bds->district->name}}</td>
      <td>{{$bds->city->name}}</td>
      <td>{{number_format($bds->price)}} VNĐ  ({{ number_format($bds->price / $bds->dientich) }} đ / m2)
</td>
      <td>{{$bds->dientich}}</td>


<td><a href="{{route('soldpost',$bds->id)}}"><button type="button" class="btn btn-info">Confirm Done</button></a></td>
<td><a href="{{route('viewpost',$bds->id)}}"><button type="button" class="btn btn-secondary">View</button></a></td>
<td><a href="{{route('editpost',$bds->id)}}"><button type="button" class="btn btn-success">Edit</button></a></td>
<td><a href="{{route('delpost',$bds->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                        </tr>
@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>













<div id="threeCarDiv" class="desc" style="display: none">
<table class="table" id="rent" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">City</th>
      <th scope="col">Price</th>
      <th scope="col">Area (m2)</th>
    </tr>
  </thead>
  <tbody>
@foreach($bdsrent as $bdsr)
    <tr>
      <th scope="row">{{$bdsr->id}}</th>
      <td>{{$bdsr->name}}</td>
      <td>{{$bdsr->address}}</td>
      <td>{{$bdsr->district->name}}</td>
      <td>{{$bdsr->city->name}}</td>
      <td>{{number_format($bdsr->price)}} VNĐ/Tháng</td>
      <td>{{$bdsr->dientich}}</td>


<td><a href="{{route('soldpost',$bdsr->id)}}"><button type="button" class="btn btn-info">Confirm Done</button></a></td>
<td><a href="{{route('viewpost',$bdsr->id)}}"><button type="button" class="btn btn-secondary">View</button></a></td>
<td><a href="{{route('editpost',$bdsr->id)}}"><button type="button" class="btn btn-success">Edit</button></a></td>
<td><a href="{{route('delpost',$bdsr->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>


    </tr>
@endforeach
  </tbody>
</table>
</div>








<div id="fourCarDiv" class="desc" style="display: none">
<table class="table" id="need" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">City</th>
      <th scope="col">Price</th>
      <th scope="col">Area (m2)</th>
    </tr>
  </thead>
  <tbody>
@foreach($bdsneed as $bdsn)
    <tr>
      <th scope="row">{{$bdsn->id}}</th>
      <td>{{$bdsn->name}}</td>
      <td>{{$bdsn->address}}</td>
      <td>{{$bdsn->district->name}}</td>
      <td>{{$bdsn->city->name}}</td>
      <td>{{number_format($bdsn->price)}} VNĐ</td>
      <td>{{$bdsn->dientich}}</td>


<td><a href="{{route('soldpost',$bdsn->id)}}"><button type="button" class="btn btn-info">Confirm Done</button></a></td>
<td><a href="{{route('viewpost',$bdsn->id)}}"><button type="button" class="btn btn-secondary">View</button></a></td>
<td><a href="{{route('editpost',$bdsn->id)}}"><button type="button" class="btn btn-success">Edit</button></a></td>
<td><a href="{{route('delpost',$bdsn->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>


    </tr>
@endforeach
  </tbody>
</table>
</div>













<div id="fiveCarDiv" class="desc" style="display: none">
<table class="table" id="off" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">City</th>
      <th scope="col">Price</th>
      <th scope="col">Area (m2)</th>
    </tr>
  </thead>
  <tbody>
@foreach($bdsoff as $bdso)
    <tr>
      <th scope="row">{{$bdso->id}}</th>
      <td>{{$bdso->name}}</td>
      <td>{{$bdso->address}}</td>
      <td>{{$bdso->district->name}}</td>
      <td>{{$bdso->city->name}}</td>
      <td>{{number_format($bdso->price)}} VNĐ  ({{ number_format($bdso->price / $bdso->dientich) }} đ / m2)
</td>
      <td>{{$bdso->dientich}}</td>


<td><a href="{{route('viewpost',$bdso->id)}}"><button type="button" class="btn btn-secondary">View</button></a></td>
<td><a href="{{route('delpost',$bdso->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>


    </tr>
@endforeach
  </tbody>
</table>
</div>


















                </div>
@endsection