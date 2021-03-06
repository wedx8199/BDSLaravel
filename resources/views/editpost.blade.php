@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit BDS</h1>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $er)
                            {{$er}}
                            @endforeach
                        </div>
                    @endif
                    </div>











<form method="post" action="{{route('posteditpost',$bds->id)}}" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" name="name" value="{{$bds->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Addr" name="address" value="{{$bds->address}}">
  </div>

<label for="city">City:</label>
<select id="city" class="form-control city-control" name="city">
@foreach($city as $tp)
  <option value="{{$tp->id}}" {{$bds->id_city==$tp->id ? 'selected' : ''}}>{{$tp->name}}</option>
@endforeach
</select>

<label for="district">District:</label>
<select id="district" class="form-control" name="district">
@foreach($district as $dist)
  <option value="{{$dist->id}}" {{$bds->id_district==$dist->id ? 'selected' : ''}}>{{$dist->name}}</option>
@endforeach
</select>


<label for="type">BDS Type:</label>
<select id="type" class="form-control" name="type">
@foreach($type as $type)
  <option value="{{$type->id}}" {{$bds->id_type==$type->id ? 'selected' : ''}}>{{$type->name}}</option>
@endforeach
</select>

  <div class="form-group">
    <label for="gia">Price</label>
    <input type="number" class="form-control" id="gia" placeholder="Price" name="price" value="{{$bds->price}}">
  </div>
  <div class="form-group">
    <label for="dt">Area (m??)</label>
    <input type="number" class="form-control" id="dt" placeholder="Area" name="area" step=0.01 value="{{$bds->dientich}}">
  </div>

@foreach($pic as $p)
                <img src="source/image/{{$p->name}}" alt="" class="img-fluid mb30" width="500" height="500">
                <a href="{{route('delpic',$p->id)}}"><button type="button" class="btn btn-danger">Delete Pic</button></a>
                <br><br>
@endforeach

  <div class="form-group">
    <label for="exampleFormControlFile1">Pic input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="newFile[]" id="newFile" multiple>
  </div>

  <div class="form-group">
    <label for="desc" class="control-label col-lg-3">Description</label>
    <div class="col-lg-6">
    <textarea class="form-control" name="info" id="desc" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{$bds->info}}</textarea>
    </div>
  </div>


  <div class="form-group">
    <label for="youtube">Clip Youtube</label>
    <input type="text" class="form-control" id="youtube" placeholder="Video URL" name="youtube" value="{{$bds->youtube}}">
  </div>

  @if(Auth::check() && Auth::user()->role == "admin")
  <div class="form-group">
    <label for="oname">T??n ch???</label>
    <input type="text" class="form-control" id="oname" placeholder="T??n ch???..." name="oname" value="{{$bds->dangdum_name}}">
  </div>
  <div class="form-group">
    <label for="onum">S??T Li??n H???</label>
    <input type="text" class="form-control" id="onum" placeholder="S??T..." name="onumber" value="{{$bds->dangdum_phone}}">
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