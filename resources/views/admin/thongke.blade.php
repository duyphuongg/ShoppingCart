@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        @if(Session::has('err'))
                        <div class="alert alert-danger">{{Session::get('err')}}@endif</div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>ID_Khách hàng</th>
                                <th>Khách hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Tổng tiền</th>
                                <th>Hình thức thanh toán</th>
                                <th>Ghi chú</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bill as $b)
                            <tr class="odd gradeX" align="center">
                                <td>{{$b->id}}</td>
                                <td>{{$b->id_customer}}</td>
                                <td>{{$b->customer->name}}</td>
                                <td>{{$b->date_order}}</td>
                                <td>{{number_format($b->total)}}</td>
                                <td>{{$b->payment}}</td>
                                <td>{{$b->note}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <?php
                    $tongtien =0;
                        foreach($bill as $b)
                            $tongtien = $tongtien+$b->total;
                    ?>
                    <div>
                        <label>
                            Tổng tiền hoá đơn: 
                            {{number_format($tongtien).' đồng'}}
                        </label>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection