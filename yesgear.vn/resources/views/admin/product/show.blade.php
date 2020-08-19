@extends('layout.admin-layout')
@section('content')

<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3>Danh sách sản phẩm</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>thumbnail</th>
                            <th>Tên sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Thương hiệu</th>
                            <th>Phân loại</th>
                            <th>Đơn giá</th>
                            <th>Tồn kho</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td><b>{{$product->id}}</b></td>
                            <td><img width="100px" src="{{url($product->thumbnail)}}" alt=""></td>
                            <td>{{$product->name}}</td>
                            <td class="overflow">{{$product->describe}}</td>
                            <td>{{$product->brand_code}}</td>
                            <td>{{$product->category_code}}</td>
                            <td>{{number_format($product->price,0,'','.')}}đ</td>
                            <td>{{$product->quantity}}</td>
                            <td><a href="" class="btn btn-info btn-sm">Update</a><a href=""
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- content end-->
@endsection
