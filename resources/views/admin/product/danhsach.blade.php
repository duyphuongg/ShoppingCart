@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('thongbao'))
                    <div class="alert alert-success">{{Session::get('thongbao')}}@endif</div>
                    @if(Session::has('err'))
                    <div class="alert alert-danger">{{Session::get('err')}}@endif</div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Id Chi tiết loại</th>
                                <th>Giá</th>
                                <th>Giá khuyến mãi</th>
                                <th>Số lượng</th>
                                <th>Mô tả</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" align="center">
                            @foreach($product as $pr)
                                <td>{{$pr->id}}</td>
                                <td>
                                    <img width="80px" height="80px" src="source/image/product/{{$pr->image}}"></img>
                                    {{$pr->name}}
                                </td>
                                <td>{{$pr->id_chitietloai}}</td>
                                <td>{{$pr->unit_price}}</td>
                                <td>{{$pr->promotion_price}}</td>
                                <td>{{$pr->soluong}}</td>
                                <td>{{$pr->description}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/xoa/{{$pr->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/sua/{{$pr->id}}">Edit</a></td>
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