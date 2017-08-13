@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hoá đơn
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        @if(Session::has('err'))
                        <div class="alert alert-danger">{{Session::get('err')}}@endif</div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Giới tính</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Ghi chú</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer as $c)
                            <tr class="odd gradeX" align="center">
                                <td>{{$c->id}}</td>
                                <td>{{$c->name}}</td>
                                <td>{{$c->gender}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->address}}</td>
                                <td>{{$c->phone_number}}</td>
                                <td>{{$c->note}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection