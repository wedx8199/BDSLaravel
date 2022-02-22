@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Change Pass {{Auth::user()->email}}</h1>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $er)
                            {{$er}}
                            @endforeach
                        </div>
                    @endif
                    </div>











<form method="post" action="{{route('changepass')}}" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="exampleInputPassword">New Password</label>
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="passnew">
  </div>
  <div class="form-group">
    <label for="exampleRepeatPassword">Retype New Password</label>
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Retype Password" name="repassnew">
  </div>

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