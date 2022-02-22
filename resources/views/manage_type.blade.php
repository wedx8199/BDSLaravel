@extends('master')
@section('content')
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage Type</h1>
                    </div>



<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Type</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<form id="my_form" method="post" action="{{route('postaddtype')}}" enctype="multipart/form-data">
@csrf
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input name="name" type="text" id="defaultForm-email" class="form-control validate" required="">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Type Name</label>
        </div>


      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-default">Add</button>
      </div>
    </div>
  </div>
</div>
</form>
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalForm">Add Type</a>
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
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
@foreach($type as $t)
                                        <tr>
                                            <td>{{$t->id}}</td>
                                            <td>{{$t->name}}</td>
<td><a href="{{route('deltype',$t->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>

<td>

<div class="modal fade" id="modalLoginForm{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<form id="my_form" method="post" action="{{route('postadmintypeedit',$t->id)}}" enctype="multipart/form-data">
@csrf
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input name="name" type="text" id="defaultForm-name" class="form-control validate" required="" value="{{$t->name}}">
          <label data-error="wrong" data-success="right" for="defaultForm-name">Name</label>
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
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm{{$t->id}}">Edit</a>
</div>

</td>




                                        </tr>
@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
























                </div>
@endsection