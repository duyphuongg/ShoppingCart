@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>{{$sua->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('thongbao'))
                        <div class="alert alert-success">{{Session::get('thongbao')}}@endif
                        </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/users/sua/{{$sua->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Phân quyền</label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="2" checked="" type="radio">Nhân viên
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection