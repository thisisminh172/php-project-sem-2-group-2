@extends('layout.admin-layout')

@section('content')
    <!-- +++++++++++++++++++++ -->
    <!-- content start-->
    <div id="wp-content" class="bg-light w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 alert alert-light">
                    <h3>Danh sách bình luận</a><h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Comementer ID</th>
                                <th>Content</th>
                                <th>Votes</th>
                                <th>Name</th>
                                <th>Sản phẩm bình luận<th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $cmt)
                                <tr>
                                    <td>{{ $cmt->id }}</td>
                                    <td>{{ $cmt->commenter_id }}</td>
                                    <td>{{ $cmt->content }}</td>
                                    <td>{{ $cmt->votes }}</td>
                                    <td>{{ $cmt->name }}</td>
                                    <td>{{ $cmt->product_id }}</td>
                                    <td><a href="#" class="btn btn-info">Update</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
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
