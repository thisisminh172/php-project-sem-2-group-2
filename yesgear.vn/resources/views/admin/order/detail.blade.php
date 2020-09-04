@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="alert alert-light">
                    <h3>Chi tiết đơn hàng</h3>
                </div>
            </div>

        </div>
        <div class="row ml-5">
            <div class="col">
                <ul>
                    <li>Tên khách hàng: <b>{{$order->name}}</b></li>
                    <li>Số điện thoại: <b>{{$order->phone}}</b></li>
                    <li>Email: <b>{{$order->email}}</b></li>
                    <li>Địa chỉ giao hàng: <b>{{$order->address}}</b></li>
                    <li>Mã đơn hàng: <b>{{$order->payment_content}}</b></li>
                    <li>Tổng hóa đơn: <b>{{number_format($total,0,'','.')}}đ</b></li>

                    <li class="mt-3">Chi tiết đơn hàng:
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order_detail as $row)
                                <tr>
                                    <td>{{$row->product_id}}</td>
                                    <td>{{$row->quantity}}</td>
                                    <td>{{number_format($row->price,0,'','.')}}đ</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row ml-5">
            <div class="col">
                <a href="{{url('admin/order')}}" class="btn btn-info">Quay lại danh sách đơn hàng <i class="fas fa-arrow-circle-left"></i> </a>
            </div>
        </div>
    </div>
</div>

<!-- content end-->
@endsection
