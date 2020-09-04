@extends('layout.layout')
@section('content')
{{-- content starts --}}
<div class="container">
    <div class="row">
        <div class="col">
            <div class="alert alert-success font-weight-bold mt-5">
                <ul class="p-3">
                    <li>Thực hiện thanh toán thành công</li>
                    <li>Nội dung thanh toán được gửi đến email khách hàng</li>
                </ul>
            </div>
            <div class="border p-3">
                <h5 class="text-warning">Thông tin thanh toán</h5>
                <ul class="pl-5">
                    <li><b>Tên: </b>{{$info->name}}</li>
                    <li><b>Email: </b>{{$info->email}}</li>
                    <li><b>Số điện thoại: </b>{{$info->phone}}</li>
                    <li><b>Địa chỉ giao hàng: </b>{{$info->address}}</li>
                    <li><b>Mã đơn hàng: </b>{{$info->payment_content}}</li>
                    <li><b>Nội dung chuyển khoản: </b>{{$info->payment_content}}</li>
                </ul>
            </div>
            <a href="{{url('product/show')}}" class="btn btn-info">Tiếp tục mua hàng</a>

        </div>
    </div>
</div>

{{-- content ends --}}
@endsection
