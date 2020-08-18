@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3>Danh sách nhân viên</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Tên</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>Address</th>
                            <th>Số điện thoại</th>
                            <th>Roles</th>
                            <th>Cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Le Minh</td>
                            <td>minhle123</td>
                            <td>minh@gmail.com</td>
                            <td>12.2.3123</td>
                            <td>cmt8</td>
                            <td>012345678</td>
                            <td>admin</td>
                            <td><a href="" class="btn btn-info">Update</a><a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Le Minh</td>
                            <td>minhle123</td>
                            <td>minh@gmail.com</td>
                            <td>12.2.3123</td>
                            <td>cmt8</td>
                            <td>012345678</td>
                            <td>admin</td>
                            <td><a href="" class="btn btn-info">Update</a><a href="" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Le Minh</td>
                            <td>minhle123</td>
                            <td>minh@gmail.com</td>
                            <td>12.2.3123</td>
                            <td>cmt8</td>
                            <td>012345678</td>
                            <td>admin</td>
                            <td><a href="" class="btn btn-info">Update</a><a href="" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- content end-->
@endsection
