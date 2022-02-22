@extends('master')
@section('content')




                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-2 text-gray-800">Yêu Cầu Liên Hệ</h1>
                        @if(Auth::user()->role == "admin")
                        <a href="{{route('signin')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fa fa-plus fa-sm text-white-50"></i> Tạo tài khoản</a>
                        @else
                        @endif
                    </div>
                    <!-- DataTales Example -->






                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th>Ghi chú</th>
                                            <th>Ngày</th>
                                            <th>Tình trạng</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th>Ghi chú</th>
                                            <th>Ngày</th>
                                            <th>Tình trạng</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
@foreach($contact as $ct)
                                        <tr>
                                            <td>{{$ct->name}}</td>
                                            <td>{{$ct->email}}</td>
                                            <td>{{$ct->phone}}</td>
                                            <td>{{\Illuminate\Support\Str::limit($ct->comment, 30)}}</td>
                                            <td>{{$ct->created_at->format('d/m/Y')}}</td>
                                            <td>Chưa xử lý</td>
                                            <td><a href="{{route('delreq',$ct->id)}}"><button type="button" class="btn btn-danger">Xử lý xong</button></a></td>
                                        </tr>
@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




                    

                </div>



  



@endsection