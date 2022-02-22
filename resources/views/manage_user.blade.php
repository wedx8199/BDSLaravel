@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage User</h1>


                        @if(Auth::user()->role == "admin")
                        <a href="{{route('signin')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fa fa-plus fa-sm text-white-50"></i> Create User</a>
                        @else
                        @endif

                    </div>





                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
@foreach($user as $u)
                                        <tr>
                                            <td>{{$u->id}}</td>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->email}}</td>
                                            <td>{{$u->phone}}</td>
                                            <td><a href="{{route('viewedit',$u->id)}}"><button type="button" class="btn btn-success">View Post</button></a></td>



@if($u->role == "suspended")

<td><a href="{{route('unlockuser',$u->id)}}"><button type="button" class="btn btn-primary"><i class="fa fa-unlock"></i> Un-suspend User</button></a></td>

@else

<td><a href="{{route('lockuser',$u->id)}}"><button type="button" class="btn btn-secondary"><i class="fa fa-lock"></i> Suspend User</button></a></td>

@endif

<td>
  








<div class="modal fade" id="modalLoginForm{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<form id="my_form" method="post" action="{{route('postadminuseredit',$u->id)}}" enctype="multipart/form-data">
@csrf
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input name="name" type="text" id="defaultForm-name" class="form-control validate" required="" value="{{$u->name}}">
          <label data-error="wrong" data-success="right" for="defaultForm-name">Name</label>
        </div>

        <div class="md-form mb-4">
    <input name="phone" type="tel" id="defaultForm-pass" class="form-control validate" pattern="(\+84|0)\d{9,10}" required="" value="{{$u->phone}}">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Phone</label>
        </div>



      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm{{$u->id}}">Edit</a>
</div>










</td>


<td><a href="{{route('deluser',$u->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>




                                        </tr>
@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


















                </div>
@endsection