@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit User {{Auth::user()->email}}</h1>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $er)
                            {{$er}}
                            @endforeach
                        </div>
                    @endif
                    </div>











<form method="post" action="{{route('postuseredit',$user->id)}}" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone" name="phone" value="{{$user->phone}}" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"> -->
                                        <input type="tel" class="form-control form-control-user" id="exampleInputEmail1"
                                            placeholder="Enter phone" name="phone" value="{{$user->phone}}" pattern="(\+84|0)\d{9,10}" required>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<a class="small" href="{{route('changepass')}}">Change Password</a>









                </div>

<!-- <script type="text/javascript">
$(document).ready(function(){
	$(document).on('change','.city-control',function(){
		console.log("Changed");
	});
});
</script> -->


@endsection