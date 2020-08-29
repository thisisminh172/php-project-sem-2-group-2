@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col">
                <div class="alert alert-light">
                    <h3>Dashboard</h3>
                </div>
            </div>

        </div>

        <div class="row">
            @if (session('message'))
            <div class="col alert alert-success">
                <h4>
                    {{ session('message') }}
                </h4>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col col-sm-6 col-md-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">ĐƠN HÀNG THÀNH CÔNG</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$successed_orders}}</h5>
                        <p class="card-text">Đơn hàng giao dịch thành công</p>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6 col-md-3">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">ĐANG XỬ LÝ</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$waiting_orders}}</h5>
                        <p class="card-text">Số lượng đơn hàng đang xử lý</p>
                    </div>
                </div>
            </div>

            <div class="col col-sm-6 col-md-3">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">DOANH SỐ</div>
                    <div class="card-body">
                        <h5 class="card-title">{{number_format($total,'0','','.')}}đ</h5>
                        <p class="card-text">Doanh số hệ thống</p>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6 col-md-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">ĐƠN HÀNG HỦY</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$canceled_orders}}</h5>
                        <p class="card-text">Số đơn bị hủy trong hệ thống</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-7">
                <div class="alert alert-danger">
                    <h3>Danh sách sản phẩm còn dưới 10 đơn vị tồn kho</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Tồn kho</th>
                            <th>Bán ra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $t=0;
                        @endphp
                        @foreach ($products as $product)
                        @php
                            $t++;
                        @endphp
                        <tr>
                            <td>{{$t}}</td>
                            <td>{{$product['id']}}</td>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['quantity']}}</td>
                            <td>{{$product['sale']}}</td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- content end-->
@endsection
