@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col alert alert-light">
                <h3>Danh sách đơn hàng</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>Mã đơn</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tài khoản ngân hàng</th>
                            <th>Tình trạng</th>
                            <th>Cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Lê Minh</td>
                            <td>minh@gmail.com</td>
                            <td>0901231313</td>
                            <td>cmt8</td>
                            <td>12345678909</td>
                            <td><span class="btn btn-warning text-dark font-weight-bold btn-sm">waiting</span></td>
                            <td><a href="" class="btn btn-info mr-1 btn-sm">Detail</a><a href=""
                                    class="btn btn-primary mr-1 btn-sm">Edit</a><a href=""
                                    class="btn btn-danger mr-1 btn-sm">Delete</a></td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Lê Minh</td>
                            <td>minh@gmail.com</td>
                            <td>0901231313</td>
                            <td>cmt8</td>
                            <td>12345678909</td>
                            <td><span class="btn btn-success text-light font-weight-bold btn-sm">successed</span></td>
                            <td><a href="" class="btn btn-info mr-1 btn-sm">Detail</a><a href=""
                                    class="btn btn-primary mr-1 btn-sm">Edit</a><a href=""
                                    class="btn btn-danger mr-1 btn-sm">Delete</a></td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Lê Minh</td>
                            <td>minh@gmail.com</td>
                            <td>0901231313</td>
                            <td>cmt8</td>
                            <td>12345678909</td>
                            <td><span class="btn btn-warning text-dark font-weight-bold btn-sm">waiting</span></td>
                            <td><a href="" class="btn btn-info mr-1 btn-sm">Detail</a><a href=""
                                    class="btn btn-primary mr-1 btn-sm">Edit</a><a href=""
                                    class="btn btn-danger mr-1 btn-sm">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- content end-->
@endsection
