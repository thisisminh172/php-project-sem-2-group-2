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
            <div class="row">
                <div class="col">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên bài viết</th>
                                <th>Nội dung</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td><b>{{ $product->id }}</b></td>
                                    <td>{{ $product->name }}</td>
                                    <td class="overflow">{{ $product->describe }}</td>
                                    <td class="btn-group"><a href="{{ route('admin.product.update', $product->id) }}"
                                            class="btn btn-info btn-sm">Update</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
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
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content end-->
@endsection
