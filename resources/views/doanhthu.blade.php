@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Doanh Thu</h1>






                    </div>

 <form method="get" action="" enctype="multipart/form-data">
  @csrf
<label for="day1">Thời gian</label>
        <div class="input-group">
          <input type="date" name="day1" id="day1" class="input-sm form-control" placeholder="" required>
          <input type="date" name="day2" id="day2" class="input-sm form-control" placeholder="" required>
        </div>
  <button type="submit" formaction="{{route('doanhthutime')}}" class="btn btn-primary">Choose</button>
  <button type="submit" formaction="{{route('export')}}" class="btn btn-success"><i class="fas fa-download fa-sm text-white-50"></i> Export Excel</button>
</form>
<br>
<br> 




<h5 class="  text-gray-800">Tổng hoa hồng (2%): {{number_format($bds->sum('price') * 2 / 100)}} VNĐ</h5>
<h5 class="  text-gray-800">trên tổng: {{number_format($bds->sum('price'))}} VNĐ</h5>





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
@foreach($bds as $bds)
    <tr>
      <th scope="row">{{$bds->id}}</th>
      <td>{{$bds->name}}</td>
      <td>{{$bds->address}}</td>
      <td>{{$bds->district->name}}</td>
      <td>{{$bds->city->name}}</td>
      <td>{{number_format($bds->price)}} VNĐ  ({{ number_format($bds->price / $bds->dientich) }} đ / m2)
</td>
      <td>{{$bds->type->name}}</td>
      <td>{{$bds->dientich}}</td>
<td><a href="{{route('viewpost',$bds->id)}}"><button type="button" class="btn btn-secondary">View</button></a></td>
<!-- <td><button type="button" class="btn btn-success">Edit</button></td>
<td><button type="button" class="btn btn-danger">Delete</button></td> -->
    </tr>
@endforeach
  </tbody>
</table>












                </div>





@endsection