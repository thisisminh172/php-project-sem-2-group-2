@extends('layout.layout')
@section('content')
<!-- content start -->
<style>
    tbody tr td:first-child {
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="alert alert-info">
                <h5>Kiểm tra đơn hàng</h5>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6"></div>
        <div class="col-6">
            <form action="{{url('check/order')}}" method="post">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="payment_content" class="form-control" id="search-box"
                        placeholder="Nhập mã đơn hàng...">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-outline-info" id="search-btn" name="search-btn"
                            value="Tìm kiếm đơn hàng" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-8">

            @if (session('fail'))
                <div class="alert alert-danger">
                    <p>{{session('fail')}}</p>
                </div>
            @endif
            @if (session('order'))
            <table class="table table-hover table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th colspan="2" class="text-danger">Chi tiết đơn hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mã đơn hàng</td>
                        <td>{{session('order')->payment_content}}</td>
                    </tr>
                    <tr>
                        <td>Tên khách hàng</td>
                        <td>{{session('order')->name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{session('order')->email}}</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>{{session('order')->phone}}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ giao hàng</td>
                        <td>{{session('order')->address}}</td>
                    </tr>
                    <tr>
                        <td>Tình trạng đơn hàng</td>
                        @if (session('order')->status == 'waiting')
                        <td class="text-success">Đơn hàng đang được xử lý</td>
                        @elseif(session('order')->status == 'successed')
                        <td class="text-success">Đã giao hàng</td>
                        @endif

                    </tr>
                </tbody>
            </table>
            @endif

        </div>
    </div>
</div>
<!-- content end -->
@endsection
