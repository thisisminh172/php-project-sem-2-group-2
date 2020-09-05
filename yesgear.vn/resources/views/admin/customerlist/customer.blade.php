@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3>Danh sách email khách hàng đã từng đặt hàng</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover text-center">
                    @foreach ($customers_order as $c_order)
                    <tr>Email</tr>
                    <td>{{ $c_order->email }}</td>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 alert alert-light">
            <h3>Danh sách khách hàng đã bình luận</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers_comment as $c_comment)
                    <tr>
                        <td>{{ $c_comment->id }}</td>
                        <td>{{ $c_comment->name }}</td>
                        <td>{{ $c_comment->email }}</td>
                        <td>{{ $c_comment->phone }}</td>
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