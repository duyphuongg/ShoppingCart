@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại sản phẩm
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
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($type as $tp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tp->id}}</td>
                                <td>{{$tp->name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product_type/xoa/{{$tp->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product_type/sua/{{$tp->id}}">Edit</a></td>
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