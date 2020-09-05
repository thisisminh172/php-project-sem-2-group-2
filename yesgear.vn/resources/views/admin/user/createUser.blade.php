@extends('layout.admin-layout')

@section('content')
    <!-- +++++++++++++++++++++ -->
    <!-- content start-->
    <div id="wp-content" class="bg-light w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="alert alert-light">
                        <h3>Thêm nhân viên mới</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form action="{{ url('createUser') }}" id="createUserForm"
                        oninput='passwordConfirm.setCustomValidity(passwordConfirm.value != password.value ? "Passwords do not match." : "")'
                        method='get'>
                        {{ csrf_field() }}
                        <hr>
                        <h4>
                            @if (session('message'))
                                {{ session('message') }}
                            @endif
                        </h4>
                        <div class="form-group">
                            <label for="email">Tên nhân viên:</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Địa chỉ:</label>
                            <input type="text" name="address" class="form-control" id="address" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Mật khẩu:</label>

                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Xác nhận mật khẩu:</label>
                            <input type="password" name="passwordConfirm" class="form-control" id="passwordConfirm"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="" value="Đăng ký" class="btn btn-success w-25">
                            <input type="reset" value="Reset" class="btn btn-dark w-25">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- content end-->
@endsection
