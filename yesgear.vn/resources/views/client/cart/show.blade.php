@extends('layout.layout')
@section('content')
{{-- content starts --}}
<div class="container">
    <div class="row">
        <div class="col">
            <div id="cart-wp" class="mt-5">
                <h3 class="alert alert-secondary">Danh sách giỏ hàng</h3>
                <p>Hiện tại có {{Cart::count()}} sản phẩm trong giỏ hàng</p>
                <form action="{{route('cart.update')}}" method="post">
                    @csrf
                    @if (Cart::count()>0)
                    <table class="table table-bordered table-hover table-striped text-center mt-5">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Thumbnail</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $temp = 0;
                            @endphp
                            @foreach (Cart::content() as $row)
                            @php
                            $temp ++;
                            @endphp
                            <tr>
                                <td>{{$temp}}</td>
                                <td><img src="{{asset($row->options->thumbnail)}}" alt="" width="100px"></td>
                                <td><a href="{{route('product.show.detail',$row->id)}}"
                                        class="text-primary">{{$row->name}}</a></td>
                                <td>{{number_format($row->price,0,',','.')}}đ</td>
                                <td>
                                    <input type="number" name="qty[{{$row->rowId}}]" min="1" style="width: 50px;text-align:center" id=""
                                        value="{{$row->qty}}">
                                </td>
                                <td>{{number_format($row->total,0,',','.')}}đ</td>
                                <td><a href="{{route('cart.remove',$row->rowId)}}" class="text-danger"><i
                                            class="far fa-trash-alt"></i> Xóa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('cart.destroy')}}" class="btn btn-outline-primary">Xóa danh sách giỏ hàng</a>

                    <input type="submit" name="btn_update" value="Cập nhật giỏ hàng"
                        class="btn btn-primary float-right">

                    <div class="text-right mt-5">
                        <h5>Tổng giỏ hàng: {{Cart::total()}}đ</h5>
                    </div>
                    <div class="mt-5 position-relative">
                        <a href="" class="btn btn-info">Tiếp tục mua hàng</a>
                        <a href="{{url('order/add')}}" id="btn-check-out"
                            class="btn btn-danger position-absolute w-25 font-weight-bold">Thanh
                            toán</a>
                    </div>
                    @endif
                </form>

            </div>
        </div>
    </div>
</div>

{{-- content ends --}}
@endsection
