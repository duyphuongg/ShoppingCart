@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>Danh sách</small>
                        </h1>
                    @if(Session::has('thongbao'))
                    <div class="alert alert-success">{{Session::get('thongbao')}}@endif
                    </div>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Phân quyền</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $u)
                            <tr class="odd gradeX" align="center">
                                <td>{{$u->id}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->password}}</td>
                                <td>{{$u->id_phanquyen}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/users/xoa/{{$u->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/users/sua/{{$u->id}}">Edit</a></td>
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