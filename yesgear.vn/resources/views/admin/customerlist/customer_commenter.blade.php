@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3 class="text-danger">Gửi email khuyến mãi tới khách hàng từng đặt hàng</h3>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <form action="{{url('salemail/send')}}" method="post">
                    <div class="col">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-danger">Chọn email khách hàng để gửi thông tin khuyến
                                        mãi
                                    </th>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers_comment as $c_comment)
                                <tr>
                                    <td>{{ $c_comment->email }}</td>
                                    <td><input type="checkbox" value="{{ $c_comment->email}}" name="email[]"></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        <input class="btn btn-info" type="button" id="btn1" value="Chọn hết" />
                                        <input class="btn btn-danger" type="button" id="btn2" value="Bỏ chọn" />
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Tên chương trình khuyến mãi</label>
                        <input type="text" name="salename" id="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nội dung chương trình khuyến mãi</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;<li><i>Yêu cầu 1 chương trình phải có 3 nội dung khuyến mãi</i></li><br>
                        <input type="text" name="sale1" id="" class="form-control" required
                            placeholder="Nội dung khuyến mãi 1"><br>
                        <input type="text" name="sale2" id="" class="form-control" required
                            placeholder="Nội dung khuyến mãi 2"><br>
                        <input type="text" name="sale3" id="" class="form-control" required
                            placeholder="Nội dung khuyến mãi 3"><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Gửi mail" class="btn btn-outline-success">
                        <input type="reset" value="Reset" class="btn btn-outline-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
document.getElementById("btn1").onclick = function() {
    var checkboxes = document.getElementsByName('email[]');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = true;
    }
};

document.getElementById("btn2").onclick = function() {
    var checkboxes = document.getElementsByName('email[]');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = false;
    }
};
</script>
<!-- content end-->
@endsection