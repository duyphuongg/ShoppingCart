@extends('admin.layout.index')	
@section('content')	

		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại sản phẩm
                            <small>{{$sua->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('thongbao'))
                        <div class="alert alert-success">{{Session::get('thongbao')}}@endif
                        </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/product_type/sua/{{$sua->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Tên loại sản phẩm</label>
                                <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm" />
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