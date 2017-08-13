@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết hoá đơn
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        @if(Session::has('err'))
                        <div class="alert alert-danger">{{Session::get('err')}}@endif</div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID_Bill</th>
                                <th>ID_Product</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($billdetail as $bd)
                            <tr class="odd gradeX" align="center">
                                <td>{{$bd->id_bill}}</td>
                                <td>{{$bd->id_product}}</td>
                                <td>{{$bd->quantity}}</td>
                                <td>{{number_format($bd->unit_price)}}</td>
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