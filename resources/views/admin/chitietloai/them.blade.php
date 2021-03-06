@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhà sản xuất
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('thongbao'))
                        <div class="alert alert-success">{{Session::get('thongbao')}}@endif
                        </div>
                    @if(Session::has('err'))
                    <div class="alert alert-danger">{{Session::get('err')}}@endif</div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/chitietloai/them" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Loại sản phẩm : </label>
                                <select class="wc-select" name="id_type">
                                    @foreach($them as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên nhà sản xuất</label>
                                <input class="form-control" name="name" placeholder="Nhập tên nhà sản xuất" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection