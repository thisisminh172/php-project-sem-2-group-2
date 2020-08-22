@extends('layout.product-layout')

@section('content')
<div class="container">
    <div class="row">
        {{-- san pham starts --}}
        @foreach ($products as $product)
        <div class="col-6 col-sm-3">
            <div class="card">
                <a href='{{url("product/show/$product->id")}}'>
                    <img class="card-img-top"
                        src="{{asset($product->thumbnail)}}"
                        alt="">
                </a>
                <div class="card-body">
                    <a href='{{url("product/show/$product->id")}}'>
                        <h6>{{$product->name}}</h6>
                    </a>
                    <h6 class="text-danger">{{number_format($product->price,0,'','.')}}đ</h6>
                    <div class="container-fluid text-center">
                        <div class="row">
                            <a href="" class="col btn-buy btn btn-success">Mua hàng</a>
                            <a href="" class="col btn-add-to-cart btn btn-danger">Thêm vào giỏ</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{-- san pham ends --}}

    </div>
</div>
@endsection
