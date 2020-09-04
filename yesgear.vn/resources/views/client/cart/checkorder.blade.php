@extends('layout.layout')
@section('content')
<!-- content start -->
<div class="container">
    <section class="searchorder">
        <form action="">
            {{csrf_field()}}
            <div class="input-group">
                <input type="text" name="payment_content" class="form-control" id="search-box"
                    placeholder="Nhập mã đơn hàng...">
                <div class="input-group-append">
                    <input type="submit" class="btn btn-outline-info" id="search-btn" name="search-btn"
                        value="Kiểm tra đơn hàng" />
                </div>
            </div>
        </form>
    </section>
</div>
<!-- content end -->
@endsection