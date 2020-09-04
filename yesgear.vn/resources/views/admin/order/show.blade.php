@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col alert alert-light">
                <h3>Danh sách đơn hàng</h3>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-12 col-md-6">
                <span class="p-1 font-weight-bold text-danger">Lọc đơn hàng theo tình trạng:</span>
                <div class="btn-group">
                    <a href="{{url('admin/order')}}" class="btn btn-secondary">ALL</a>
                    <a href="{{route('order.show.status','successed')}}" class="btn btn-success">SUCCESSED</a>
                    <a href="{{route('order.show.status','waiting')}}" class="btn btn-warning">WAITING</a>
                    <a href="{{route('order.show.status','canceled')}}" class="btn btn-dark">CANCELED</a>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <form action="{{url('admin/order/search')}}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" name="payment_content" class="form-control" id="search-box"
                            placeholder="Nhập mã đơn hàng...">
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-info" id="search-btn" name="search-btn"
                                value="Tìm kiếm mã đơn" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Mã đơn hàng</th>
                        <th>Tình trạng</th>
                        <th>Cập nhật</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <th>{{$order->id}}</th>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->payment_content}}</td>
                        @if ($order->status == 'waiting')
                        <td><span class="btn btn-warning text-dark font-weight-bold btn-sm">waiting</span></td>
                        @elseif($order->status == 'successed')
                        <td><span class="btn btn-success text-light font-weight-bold btn-sm">successed</span></td>
                        @elseif($order->status == 'canceled')
                        <td><span class="btn btn-dark text-light font-weight-bold btn-sm">canceled</span></td>
                        @endif

                        <td>
                            <ul class="list-unstyled">
                                <div class="btn-group">
                                    <li><a href="{{route('admin.order.detail',$order->id)}}" class="btn btn-info mr-1 btn-sm">Detail</a></li>
                                    <li><a href="{{route('admin.order.success',$order->id)}}"
                                            class="btn btn-success mr-1 btn-sm">Success</a></li>
                                    <li><a href="{{route('admin.order.cancel',$order->id)}}"
                                            class="btn btn-danger mr-1 btn-sm">Cancel</a>
                                    </li>
                                </div>
                            </ul>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="paginate-bar">
        {{$orders->links()}}
    </div>
</div>
</div>

<!-- content end-->
@endsection
