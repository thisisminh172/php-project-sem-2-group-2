@extends('layout.layout')
@section('content')
{{-- content starts --}}
<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="alert alert-info mt-5 text-center">Điền thông tin khách hàng</h4>
            <form action="" method="post">
                <p>(<span class="text-danger">*</span>) : thông tin bắt buộc</p>
                <div class="form-group">
                    <label for="name">Họ tên</label>&nbsp;<span class="text-danger">*</span>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>&nbsp;<span class="text-danger">*</span>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Điện thoại</label>&nbsp;<span class="text-danger">*</span>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ giao hàng</label>&nbsp;<span class="text-danger">*</span>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bank_account">Mã tài khoản ngân hàng (dùng để xác nhận)</label>&nbsp;<span class="text-danger">*</span>
                    <input type="text" name="bank_account" id="bank_account" class="form-control"
                        placeholder="Mã số thẻ...">
                </div>
                <div class="alert alert-danger">
                    <p>Quý khách vui lòng kiểm tra thông tin giỏ hàng trước khi nhấn thực hiện thanh toán!</p>
                    <p>Cảm ơn.</p>
                </div>
                <div class="form-group">
                    <input type="submit" value="Thực hiện thanh toán" class="form-control btn btn-success w-50">
                    <input type="reset" value="Reset" class="form-control btn btn-dark w-25">
                </div>
            </form>
        </div>
        <div class="col">
            <h4 class="alert alert-warning mt-5 text-center">Thông tin giỏ hàng</h4>
            <table class="table table-bordered table-hover table-striped text-center mt-5">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
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
                        <td><a href="{{route('product.show.detail',$row->id)}}" class="text-primary">{{$row->name}}</a>
                        </td>
                        <td>{{$row->qty}}</td>
                        <td>{{number_format($row->total,0,',','.')}}đ</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-right mt-5">
                <h5>Số tiền thanh toán: <span class="text-danger">{{Cart::total()}}đ</span></h5>
            </div>
        </div>
    </div>
</div>

{{-- content ends --}}
@endsection
