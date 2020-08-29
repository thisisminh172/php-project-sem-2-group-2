@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3 class="text-danger">Danh sách phân loại sản phẩm</h3>
            </div>
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col">


                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Số thứ tự</th>
                                <th>Tên phân loại</th>
                                <th>Viết tắt (code)</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $temp = 0;
                            @endphp
                            @foreach ($categories as $category)
                            @php
                            $temp ++;
                            @endphp
                            <tr>
                                <td class="font-weight-bold">{{$temp}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->code}}</td>
                                <td><a href="{{route('admin.category.delete',$category->code)}}" class="text-danger"><i class="far fa-trash-alt"></i> Xóa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="text-warning">Thêm mới</h3>
                    <form action="{{url('admin/product/store_category')}}" method="post" class="w-50">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên loại sản phẩm</label>
                            <input type="text" name="name" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tên viết tắt (code)</label>
                            <input type="text" name="code" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Thêm mới" class="btn btn-outline-success">
                            <input type="reset" value="Reset" class="btn btn-outline-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- content end-->
@endsection
