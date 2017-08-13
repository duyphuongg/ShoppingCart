<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <div>
                        <form role="search" method="get" id="searchform" action="{{route('thongke')}}">
                            <input type="text" value="" name="key" id="s" placeholder="Thống kê" />
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>
                    <ul class="nav" id="side-menu">
                            <!-- /input-group -->
                        <li>
                            <a href="admin/bill/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i> Hoá đơn<span class="fa arrow"></span></a>
                        
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/billdetail/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i> Chi tiết hoá đơn<span class="fa arrow"></span></a>
                        
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/customer/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i> Khách hàng<span class="fa arrow"></span></a>
                        
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a><i class="fa fa-cube fa-fw"></i> Loại sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/product_type/danhsach">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/product_type/them">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a><i class="fa fa-cube fa-fw"></i> Nhà sản xuất<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/chitietloai/danhsach">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/chitietloai/them">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a><i class="fa fa-cube fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/product/danhsach">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/product/them">Thêm </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/users/danhsach">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/users/them">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->