@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add BDS</h1>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $er)
                            {{$er}}
                            @endforeach
                        </div>
                    @endif
                    </div>











<form method="post" action="{{route('postaddpost')}}" enctype="multipart/form-data">
	@csrf
  <div class="form-group">



<label for="loai">Request:</label>
<select id="loai" class="form-control" name="loai">
  <option selected value="1">Đăng bán</option>
  <option value="2">Cho thuê</option>
  <option value="3">Cần bán - thuê</option>
</select>

    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Addr" name="address">
  </div>

<label for="city">City:</label>
<select id="city" class="form-control city-control" name="city">
  <option selected="false">-- Select --</option>
@foreach($city as $tp)
  <option value="{{$tp->id}}">{{$tp->name}}</option>
@endforeach
</select>

<label for="district">District:</label>
<select id="district" class="form-control" name="district">
<option selected="false">-- Select --</option>
</select>


<label for="type">BDS Type:</label>
<select id="type" class="form-control" name="type">
@foreach($type as $type)
  <option value="{{$type->id}}">{{$type->name}}</option>
@endforeach
</select>

  <div class="form-group">
    <label for="gia">Price</label>
    <input type="number" class="form-control" id="gia" placeholder="Price" name="price">
  </div>
  <div class="form-group">
    <label for="dt">Area (m²)</label>
    <input type="number" class="form-control" id="dt" placeholder="Area" name="area" step=0.01>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Pic input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="newFile[]" id="newFile" multiple>
  </div>

  <div class="form-group">
    <label for="desc" class="control-label col-lg-3">Description</label>
    <div class="col-lg-6">
    <textarea class="form-control" name="info" id="desc" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>Enter text here...</textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="youtube">Clip Youtube</label>
    <input type="text" class="form-control" id="youtube" placeholder="Video URL" name="youtube">
  </div>

  @if(Auth::check() && Auth::user()->role == "admin")
  <div class="form-group">
    <label for="oname">Tên chủ</label>
    <input type="text" class="form-control" id="oname" placeholder="Tên chủ..." name="oname">
  </div>
  <div class="form-group">
    <label for="onum">SĐT Liên Hệ</label>
    <input type="text" class="form-control" id="onum" placeholder="SĐT..." name="onumber">
  </div>
@else
@endif
  <button type="submit" class="btn btn-primary">Submit</button>
</form>












                </div>

<!-- <script type="text/javascript">
$(document).ready(function(){
	$(document).on('change','.city-control',function(){
		console.log("Changed");
	});
});
</script> -->


@endsection