@extends('layout.layout')
@section('content')
{{-- content starts --}}
<div id="cart-wp" class="mt-5">
    <h3 class="alert alert-secondary">Danh sách giỏ hàng</h3>
    <table class="table table-bordered table-hover table-striped text-center mt-5">
        <thead>
            <tr>
                <th>id</th>
                <th>Thumbnail</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>123</td>
                <td>123</td>
                <td><a href="{{url('product/show/13')}}" class="text-primary">daf</a></td>
                <td>adf</td>
                <td>adsf</td>
                <td>asdf</td>
                <td><a href="" class="text-danger"><i class="far fa-trash-alt"></i> Xóa</a></td>
            </tr>
            <tr>
                <td>123</td>
                <td>123</td>
                <td><a href="{{url('product/show/13')}}" class="text-primary">adfa</a></td>
                <td>adf</td>
                <td>adsf</td>
                <td>asdf</td>
                <td><a href="" class="text-danger"><i class="far fa-trash-alt"></i> Xóa</a></td>

            </tr>
        </tbody>
    </table>
    <a href="" class="btn btn-outline-primary">Xóa danh sách giỏ hàng</a>

    <div class="text-right mt-5">
        <h5>Tổng giỏ hàng: 1239913 d</h5>
    </div>
    <div class="mt-5 position-relative">
        <a href="" class="btn btn-info">Tiếp tục mua hàng</a>
        <a href="" id="btn-check-out" class="btn btn-danger position-absolute w-25 font-weight-bold">Thanh toán</a>
    </div>
</div>
{{-- content ends --}}
@endsection
