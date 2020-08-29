@extends('layout.product-layout')

@section('content')
    <div class="container">
        <div class="row">
            {{-- san pham starts --}}
            @foreach ($products as $product)
                <div class="col-6 col-sm-3">
                    <div class="card">
                        <a href='{{ url("product/show/$product->id") }}'>
                            <img class="card-img-top" src="{{ asset($product->thumbnail) }}" alt="">
                        </a>
                        <div class="card-body">
                            <a href='{{ url("product/show/$product->id") }}'>
                                <h6>{{ $product->name }}</h6>
                            </a>
                            <h6 class="text-danger">{{ number_format($product->price, 0, '', '.') }}đ</h6>

                        </div>
                        <div class="container-fluid pb-2">
                            <div class="row btn-group">
                                <div class="col-6">
                                    <a href="{{ route('cart.add', $product->id) }}"><button
                                            class="col btn-buy btn btn-outline-success p-0">
                                            Mua hàng</button></a></div>
                                <div class="col-6"><button type="button" product-id="{{ $product->id }}"
                                        class="col btn-add-to-cart btn-add-to-cart-style btn btn-outline-danger p-0"
                                        id="">Thêm giỏ hàng</button>
                                </div>
                                {{ csrf_field() }}
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
            {{-- san pham ends --}}

        </div>
    </div>
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
