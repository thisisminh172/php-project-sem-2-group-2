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
                                <th>Id</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->password }}</td>
                                    <td><a href="{{ url("admin/update/{$u->id}") }}" class="btn btn-info">Update</a>
                                        <a href="{{ url("admin/user/{$u->id}") }}" class="btn btn-danger">Delete</a>
                                    </td>
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
