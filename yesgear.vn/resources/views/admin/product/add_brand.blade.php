@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3 class="text-danger">Danh sách thương hiệu</h3>
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
                                <th>Tên thương hiệu</th>
                                <th>Viết tắt (code)</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $temp = 0;
                            @endphp
                            @foreach ($brands as $brand)
                            @php
                            $temp ++;
                            @endphp
                            <tr>
                                <td class="font-weight-bold">{{$temp}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->code}}</td>
                                <td><a href="{{route('admin.brand.delete',$brand->code)}}" class="text-danger"><i
                                            class="far fa-trash-alt"></i> Xóa</a></td>
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
                    <form action="{{url('admin/product/store_brand')}}" method="post" class="w-50">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên thương hiệu</label>
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
