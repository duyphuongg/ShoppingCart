@extends('admin.layout.index')	
@section('content')	

		<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>{{$sua->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('thongbao'))
                    <div class="alert alert-success">{{Session::get('thongbao')}}@endif</div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/product/sua/{{$sua->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Nhà sản xuất : </label>
                                <select class="wc-select" name="id_type">
                                    @foreach($type as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="unit_price" placeholder="Nhập giá sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Giá khuyến mãi</label>
                                <input class="form-control" name="promotion_price" placeholder="Nếu không có khuyến mãi thì nhập giá gốc" />
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="soluong" placeholder="Nhập số lượng sản phẩm" />
                            </div>

                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="image" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa sản phẩm</button>
                            
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection