@extends('layout.admin-layout')

@section('content')
    <!-- +++++++++++++++++++++ -->
    <!-- content start-->
    <div id="wp-content" class="bg-light w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 alert alert-light">
                    <h3>Cập nhật thông tin nhân viên</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="{{ url("admin/postUpdate/{$u->id}") }}" id="createUserForm"
                        oninput='passwordConfirm.setCustomValidity(passwordConfirm.value != password.value ? "Passwords do not match." : "")'
                        method='post'>
                        {{ csrf_field() }}
                        <hr>
                        <h4>
                            @if (session('message'))

                                {{ session('message') }}
                            @endif
                        </h4>
                        <div class="form-group">
                            <label for="email">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" required value="{{ $u->name }}">
                        </div>
                        <div class=" form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" class="form-control" id="email" required
                                value="{{ $u->email }}">
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
                            <label for="email">Address:</label>
                            <input type="text" name="address" class="form-control" id="address" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" name="password" class="form-control" id="password" required
                                value="{{ $u->password }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Confirm Password:</label>
                            <input type="password" name="passwordConfirm" class="form-control" id="passwordConfirm"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="" value="UPDATE" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- content end-->
@endsection
