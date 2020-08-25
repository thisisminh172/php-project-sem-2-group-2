@extends('layout.admin-layout')

@section('content')
    <!-- +++++++++++++++++++++ -->
    <!-- content start-->
    <div id="wp-content" class="w-100 d-flex">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 alert alert-light">
                    <h3>Dashboard</h3>
                    <h4>
                        @if (session('message')) {{ session('message') }}
                        @endif
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-6 col-md-3">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">ĐƠN HÀNG THÀNH CÔNG</div>
                        <div class="card-body">
                            <h5 class="card-title">2.680</h5>
                            <p class="card-text">Đơn hàng giao dịch thành công</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6 col-md-3">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">ĐANG XỬ LÝ</div>
                        <div class="card-body">
                            <h5 class="card-title">10</h5>
                            <p class="card-text">Số lượng đơn hàng đang xử lý</p>
                        </div>
                    </div>
                </div>

                <div class="col col-sm-6 col-md-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">DOANH SỐ</div>
                        <div class="card-body">
                            <h5 class="card-title">2.5 tỷ</h5>
                            <p class="card-text">Doanh số hệ thống</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6 col-md-3">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">ĐƠN HÀNG HỦY</div>
                        <div class="card-body">
                            <h5 class="card-title">125</h5>
                            <p class="card-text">Số đơn bị hủy trong hệ thống</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- content end-->
@endsection
