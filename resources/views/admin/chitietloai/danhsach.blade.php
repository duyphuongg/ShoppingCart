@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhà sản xuất
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('thongbao'))
                        <div class="alert alert-success">{{Session::get('thongbao')}}@endif
                        </div>
                    @if(Session::has('err'))
                    <div class="alert alert-danger">{{Session::get('err')}}@endif</div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>ID Loại</th>
                                <th>Tên</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($chitietloai as $ctl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ctl->id}}</td>
                                <td>{{$ctl->id_type}}</td>
                                <td>{{$ctl->name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/chitietloai/xoa/{{$ctl->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/chitietloai/sua/{{$ctl->id}}">Edit</a></td>
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