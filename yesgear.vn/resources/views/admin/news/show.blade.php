@extends('layout.admin-layout')
@section('content')

    <!-- +++++++++++++++++++++ -->
    <!-- content start-->
    <div id="wp-content" class="bg-light w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 alert alert-light">
                    <h3>Danh sách bài viết</h3>
                </div>
            </div>
            @if (session('success'))
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success">
                            <h5>{{ session('success') }}</h5>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên bài viết</th>
                                <th>Thumbnail</th>
                                {{-- <th>Nội dung</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $n)
                                <tr>
                                    <td><b>{{ $n->id }}</b></td>
                                    <td>{{ $n->title }}</td>
                                    <td class="overflow">{{ $n->thumbnail }}</td>
                                    {{-- <td>{{ $n->content }}</td>
                                    --}}

                                    <td class="btn-group"><a href="{{ url("admin/news/update/{$n->id}") }}"
                                            class="btn btn-info btn-sm">Update</a>
                                        <a href="{{ url("admin/news/delete/{$n->id}") }}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="paginate-bar">
                        {{-- $n->links() --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content end-->
@endsection
