<!-- sidebar start -->
<div id="wp-sidebar" class="bg-light position-fixed">
    <div id="sidebar-menu" class="">
        <ul class="list-unstyled">
            <li>
                <i class="fas fa-book-reader"></i><a href="{{ url('admin') }}"> Dashboard</a>

            </li>
            <li>
                <i class="far fa-folder"></i><a href="{{ url('admin/product') }}"> Sản phẩm</a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('admin/product') }}">Danh sách</a></li>
                    <li><a href="{{ url('admin/product/add') }}">Thêm sản phẩm</a></li>
                    <li><a href="{{ url('admin/product/add_category') }}">Thêm loại sản phẩm</a></li>
                    <li><a href="{{ url('admin/product/add_brand') }}">Thêm thương hiệu</a></li>

                </ul>

            </li>
            <li>
                <i class="far fa-folder"></i><a href="{{ url('admin/order') }}"> Bán hàng</a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('admin/order') }}">Đơn hàng</a></li>
                </ul>
            </li>
            <li>
                <i class="far fa-folder"></i><a href="{{ url('admin/slider/show') }}"> Trang</a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('admin/slider/show') }}">Hình chạy slider</a></li>
                </ul>
            </li>
            <li>
                <i class="far fa-folder"></i><a href="{{ url('') }}"> Tin tức</a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('admin/add_news') }}">Thêm mới</a></li>
                    <li><a href="{{ url('admin/list_news') }}">Danh sách</a></li>
                </ul>
            </li>
            <li>
                <i class="far fa-folder"></i><a href="{{ url('admin/user') }}"> Users</a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('admin/user') }}">Danh sách</a></li>
                    {{-- <li><a href="{{ url('') }}">Gửi thông báo</a></li> --}}
                    <li><a href="{{ url('addUser') }}">Thêm nhân viên</a></li>
                    <li><a class="btn btn-success" href="{{ url('admin/user/logout') }}">Đăng xuất</a></li>

                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- sidebar end -->
