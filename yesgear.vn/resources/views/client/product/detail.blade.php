@extends('layout.layout')

@section('content')
<!-- content start -->
<script>
$(document).ready(function() {
    // alert('hello');
    // lay src tu hinh anh duoc chon
    var src_img_click;
    $('.product-detail-thumbnails ul li .product-detail-thumbnail').click(function() {
        src_img_click = $(this).children('img').attr('src');
        console.log(src_img_click);
        $('.product-detail-image-large').children('img').attr('src', src_img_click);

    });
});
</script>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mt-3">
            <div class="product-detail-image">
                <div class="product-detail-image-large">
                    <img src="{{asset($images[0])}}" alt="">
                </div>
                <div class="product-detail-thumbnails mt-3 ml-3">
                    <ul class="row">
                        @foreach ($images as $image)
                        <li class="mr-1">
                            <div class="product-detail-thumbnail"><img src="{{asset($image)}}" alt=""></div>
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
            <p>Đang còn: <span class="text-success font-weight-bold">{{$product->quantity}} sản phẩm</span></p>
            <div class="row">
                <div class="col"><a href="{{route('cart.add',$product->id)}}" class="btn btn-success w-100">Mua ngay</a>
                </div>
                <div class="col"><button type="button" product-id="{{$product->id}}"
                        class="btn-add-to-cart btn btn-danger w-100" id="">Thêm giỏ hàng</button></div>
                {{ csrf_field() }}
            </div>

        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        @if(session('success'))
        <script>
        alert("{{session('success')}}");
        </script>
        @endif
    </div>
    <div class="row">
        <div class="col-12 col-lg-9">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#detail"><b>Mô tả sản phẩm</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#comment"><b>Bình luận và đánh giá</b></a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="detail" class="container tab-pane active"><br>
                    {!!$product->describe!!}
                </div>
                <div id="comment" class="container tab-pane fade"><br>
                    <!-- form bình luận và đánh giá -->
                    <div class="container">
                        <form method="post" action="{{url('client/comment')}}">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <label for="name">Họ và tên:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại:</label>
                                <input type="number" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="cm">Bình luận:</label>
                                <textarea class="form-control" row="10" id="cm" name="content"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success">Gửi</button>
                            </div>
                            {{csrf_field()}}
                        </form>
                        <div class="col-12 col-lg-9">
                            <ul>
                            <i><b>Tên {{ $comment_detail['name'] }}</b>|</i>
                            @foreach ($comments as $comment)
                            <i><span>Bình luận ngày: {{date('d/m/Y H:i',strtotime($comment->created_at))}}</span></i>
                            <br><hr>
                            &emsp;<span>{{ $comment->content }}</span>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <h5>Thông số sản phẩm</h5>
            <hr>
            {!!$product->tech_info!!}
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h1>review sản phẩm</h1>
            </div>
        </div>
    </div>
</div> -->
<script>
$(document).ready(function() {
    // alert('hello');
    $('.btn-add-to-cart').click(function() {
        let product_id = $(this).attr('product-id');
        if (product_id != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('cart.store') }}",
                method: "POST",
                data: {
                    product_id: product_id,
                    _token: _token
                },
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    alert(data.message);
                    if (data.cartCount !== "") {
                        $('#cart-count').html(data.cartCount);
                    }
                }
            });
        } //if end
    });

});
</script>
<!-- content end -->
@endsection