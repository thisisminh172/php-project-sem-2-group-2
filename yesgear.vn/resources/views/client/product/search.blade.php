@extends('layout.product-layout')

@section('content')

<div class="container">
<div class="product-category text-center text-danger">Kết quả tìm kiếm cho sản phẩm: <?php echo $search_product ?></div><hr>
    <div class="row">
        {{-- san pham starts --}}

        @foreach ($products as $product)

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-1">
            <div class="card card-product box-shadow">
                <a href='{{ url("product/show/$product->id") }}'>
                    <img class="card-img-top" src="{{ asset($product->thumbnail) }}" alt="">
                </a>
                <div class="card-body">
                    <a href='{{ url("product/show/$product->id") }}'>
                        <h6>{{ \Illuminate\Support\Str::limit($product->name, 40, $end='...') }}</h6>
                    </a>
                    <h6 class="text-danger">{{ number_format($product->price, 0, '', '.') }}đ</h6>
                    <div class="row">
                        <div class="col">
                            @if ($product->quantity <=5) <a href="{{url('contact')}}"
                                class="btn-buy btn btn-outline-warning p-1">Liên hệ đặt
                                hàng</a>

                                @elseif($product->quantity >5 )
                                <div class="row">
                                    <div class="col-5">
                                        <a href="{{ route('cart.add', $product->id) }}"
                                            class="btn-buy btn btn-outline-success p-1">
                                            Mua hàng</a>
                                    </div>
                                    <div class="col-7"><button type="button" product-id="{{ $product->id }}"
                                            class="btn-add-to-cart btn-add-to-cart-style btn btn-outline-danger p-1"
                                            id="">Thêm giỏ hàng</button>
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                @endif
                        </div>
                    </div>
                </div>




            </div>

        </div>
        @endforeach
    </div>
</div>

{{-- san pham ends --}}


{{-- ajax of cart store without reload the page - starts--}}
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
                } //ifend
            });

        });

</script>
{{-- ajax of cart store without reload the page - ends--}}



@endsection
