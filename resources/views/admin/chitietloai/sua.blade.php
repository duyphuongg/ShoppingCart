@extends('admin.layout.index')	
@section('content')	

		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhà sản xuất
                            <small>{{$sua->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('thongbao'))
                        <div class="alert alert-success">{{Session::get('thongbao')}}@endif
                        </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/chitietloai/sua/{{$sua->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Loại sản phẩm : </label>
                                <select class="wc-select" name="id_type">
                                    @foreach($type as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên nhà sản xuất</label>
                                <input class="form-control" name="name" placeholder="Nhập tên nhà sản xuất" />
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