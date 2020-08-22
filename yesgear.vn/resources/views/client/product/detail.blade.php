@extends('layout.layout')

@section('content')
<!-- content start -->
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mt-3">
            <div class="product-detail-image">
                <div class="product-detail-image-large">
                    <img src="https://hanoicomputercdn.com/media/product/6075_chuot_logitech_m325_wireless_0000_1.jpg"
                        alt="">
                </div>
                <div class="product-detail-thumbnails mt-3 ml-3">
                    <ul class="row">
                        <li class="mr-1">
                            <div class="product-detail-thumbnail"><img
                                    src="https://hanoicomputercdn.com/media/product/6075_chuot_logitech_m325_wireless_0001_2.jpg"
                                    alt=""></div>
                        </li>
                        <li class="mr-1">
                            <div class="product-detail-thumbnail"><img
                                    src="https://hanoicomputercdn.com/media/product/6075_chuot_logitech_m325_wireless_0000_1.jpg"
                                    alt=""></div>
                        </li>
                        <li class="mr-1">
                            <div class="product-detail-thumbnail"><img
                                    src="https://hanoicomputercdn.com/media/product/6075_chuot_logitech_m325_wireless_0001_2.jpg"
                                    alt=""></div>
                        </li>
                        <li class="mr-1">
                            <div class="product-detail-thumbnail"><img
                                    src="https://hanoicomputercdn.com/media/product/6075_chuot_logitech_m325_wireless_0000_1.jpg"
                                    alt=""></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 mt-3">
            <h3>{{$product->name}}</h3>
            <h3 class="text-danger">{{number_format($product->price,0,'','.')}}đ</h3>
            <div class="why-us">
                <h5>Vì sao chọn Chúng tôi?</h5>
                <ul>
                    <li>Sản phẩm chính hãng 100%</li>
                    <li> Bảo hành 6 tháng (Xem chi tiết)</li>
                    <li>1 đổi 1 trong 7 ngày (Xem chi tiết)</li>
                    <li>Giao hàng tận nơi toàn quốc</li>
                    <li>Free ship đơn hàng >200k nội thành TP.HCM, nhận trong ngày</li>
                </ul>
            </div>
            <p class="mt-5">Mã: {{$product->brand_code}}{{$product->category_code}}{{$product->id}}</p>
            <p>Đang còn: <span class="text-success font-weight-bold">{{$product->quantity}}</span></p>
            <div class="row">
                <div class="col"><a href="{{url('cart')}}" class="btn btn-success w-100">Mua ngay</a></div>
                <div class="col"><a href="" class="btn btn-danger w-100">Thêm vào giỏ hàng</a></div>
            </div>

        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-9">
            <h5>Mô tả sản phẩm</h5>
            <hr>
            {!!$product->describe!!}
        </div>
        <div class="col-12 col-lg-3">
            <h5>Thông số sản phẩm</h5>
            <hr>
            {!!$product->tech_info!!}
        </div>

    </div>
</div>

<!-- content end -->
@endsection
