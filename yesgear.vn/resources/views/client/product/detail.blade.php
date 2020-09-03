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
<style>
.checked {
    color: orange;
}
</style>
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
            <h3 class="pb-3">{{$product->name}}</h3>

            @for ($i = 1; $i <= $average_rate; $i++) <i class="fas fa-star checked"></i>

                @endfor
                @for ($r = 1; $r <= 5-$average_rate; $r++) <i class="fas fa-star"></i>
                    @endfor
                    <p class="d-inline-block">{{$count_vote}} đánh giá</p>
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
                    <p class="mt-5">Mã sản phẩm: <b>
                            {{$product->category_code}}{{$product->brand_code}}{{$product->id}}</b></p>
                    <p>Đang còn: <span class="text-success font-weight-bold">{{$product->quantity}} sản phẩm</span></p>
                    @if ($product->quantity <=5) <div class="row">
                        <div class="col">
                            <a href="{{url('contact')}}" class="btn btn-warning w-100">Liên hệ đặt hàng</a>
                        </div>
        </div>
        @else
        <div class="row">
            <div class="col"><a href="{{route('cart.add',$product->id)}}" class="btn btn-success w-100">Mua ngay</a>
            </div>
            <div class="col"><button type="button" product-id="{{$product->id}}"
                    class="btn-add-to-cart btn btn-danger w-100" id="">Thêm giỏ hàng</button></div>
            {{ csrf_field() }}
        </div>
        @endif


    </div>
</div>
</div>

<div class="container mt-5">
    <div class="row">
        @if(session('success'))
        <script>
        alert("{{session('success')}}"); >>>
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
                        <form method="post" action="{{url('client/comment')}}" class="alert alert-light">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <!-- <label>5</label><input type="radio" name="votes" value="5"><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i>


                                <label>Tốt</label><input type="radio" name="votes" value="4"><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i>


                                <label>Bình thường</label><input type="radio" name="votes" value="3"><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>


                                <label>Không tốt</label><input type="radio" name="votes" value="2"><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i>


                                <label>Rất tệ</label><input type="radio" name="votes" value="1"><i> -->
                                <label>Đánh giá sản phẩm: </label>
                                <label class="radio-inline px-1"><input type="radio" name="votes" value="5" checked>5<i
                                        class="fas fa-star checked"></i></label>
                                <label class="radio-inline px-1"><input type="radio" name="votes" value="4">4<i
                                        class="fas fa-star checked"></i></label>
                                <label class="radio-inline px-1"><input type="radio" name="votes" value="3">3<i
                                        class="fas fa-star checked"></i></label>
                                <label class="radio-inline px-1"><input type="radio" name="votes" value="2">2<i
                                        class="fas fa-star checked"></i></label>
                                <label class="radio-inline px-1"><input type="radio" name="votes" value="1">1<i
                                        class="fas fa-star checked"></i></label>
                            </div>

                            <div class="form-group" style="width: 400px;">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên..." required>
                            </div>
                            <div class="form-group" style="width: 400px;">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email..." required>
                            </div>
                            <div class="form-group" style="width: 400px;">
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="Số điện thoại liên hệ..." required>
                            </div>
                            <div class="form-group text-right" style="width: 400px;">
                                <textarea class="form-control" row="10" id="cm" name="content" placeholder="Nhập bình luận (tối đa 250 ký tự)..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Gửi</button>
                            </div>
                            {{csrf_field()}}
                        </form>
                        <div class="col-12 col-lg-9">
                            @foreach ($comments as $comment)
                            <ul class="font-weight-normal">
                                <div class="wp-comment">
                                    <li>
                                        <div class="alert alert-dark">
                                            <span style="text-transform: uppercase;"><b>{{ $comment->name }}</b>
                                                |</span>
                                            <i><span>{{date('d/m/Y H:i',strtotime($comment->created_at))}}</span></i>
                                            <br>
                                            <hr>
                                            &ensp;<span>{{ $comment->content }}</span><br>
                                            <!-- reply comment -->
                                            <a href="javascript:void(0)" class="replyCmt"><u><i>
                                                        <font color="blue" style="margin-left:24rem;">Trả lời</font>
                                                    </i></u></a>
                                            <div class="replyForm" style="display: none;">
                                                <div class="container">
                                                    <form method="post" action="{{url('client/repcomment')}}">
                                                        <input type="hidden" name="comment_id"
                                                            value="{{ $comment->id }}">
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <div class="form-group">
                                                            <label for="repname">Họ và tên:</label>
                                                            <input type="text" class="form-control" id="repname"
                                                                name="repname" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="repemail">Email:</label>
                                                            <input type="email" class="form-control" id="repemail"
                                                                name="repemail" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="repphone">Số điện thoại:</label>
                                                            <input type="number" class="form-control" id="repphone"
                                                                name="repphone" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cm">Bình luận:</label>
                                                            <textarea class="form-control" row="10" id="repcm"
                                                                name="repcontent"></textarea>
                                                        </div>
                                                        <div class="form-group text-right">
                                                            <button type="submit" class="btn btn-success">Gửi</button>
                                                        </div>
                                                        {{csrf_field()}}
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <ul style="margin-left:6rem;">
                                            @foreach($comment->comment_reply as $reply)
                                            <li class="alert alert-secondary">
                                                <span class="font-weight-bold">{{$reply->name}}:</span>
                                                {{$reply->content}}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </div>
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


    $parent_com = $(".wp-comment li div");
    $parent_com.children('a').click(function() {
        $(this).parent("div").children("div").toggle();
    });

})
</script>

<!-- content end -->
@endsection