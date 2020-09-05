@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-danger">Danh sách email khách hàng đã bình luận</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers_comment as $c_comment)
                        <tr>
                            <td>{{ $c_comment->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="text-warning">Gửi email</h3>
                    <div class="form-group">
                        <label for="">Nhập địa chỉ email khách hàng</label>
                        <input type="text" name="name" id="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nhập nội dung email</label>
                        <input type="text" name="code" id="" class="form-control" required>
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
</div>

</div>
<!-- content end-->
@endsection