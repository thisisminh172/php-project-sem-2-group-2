@extends('layout.layout')

@section('content')
<!-- content start -->
<script>
    $(document).ready(function(){
        // alert('hello');
        // lay src tu hinh anh duoc chon
        var src_img_click;
        $('.product-detail-thumbnails ul li .product-detail-thumbnail').click(function(){
            src_img_click = $(this).children('img').attr('src');
            console.log(src_img_click);
            $('.product-detail-image-large').children('img').attr('src',src_img_click);

        });
    });
</script>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mt-3">
            <div class="product-detail-image">
                <div class="product-detail-image-large">
                    <img src="{{asset($images[0])}}"
                        alt="">
                </div>
                <div class="product-detail-thumbnails mt-3 ml-3">
                    <ul class="row">
                        @foreach ($images as $image)
                        <li class="mr-1">
                            <div class="product-detail-thumbnail"><img
                                    src="{{asset($image)}}"
                                    alt=""></div>
                        </li>
                        @endforeach

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
            <p class="mt-5">Mã sản phẩm: <b> {{$product->category_code}}{{$product->brand_code}}{{$product->id}}</b></p>
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
