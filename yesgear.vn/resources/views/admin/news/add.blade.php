@extends('layout.admin-layout')

@section('content')
    <!-- +++++++++++++++++++++ -->
    <!-- content start-->
    <div id="wp-content" class="bg-light w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 alert alert-light">
                    <h3 class="text-danger">Thêm bài viết mới</h3>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <form action="{{ url('admin/store_news') }}" id="form-add-news" method="post"
                        onsubmit="return check_data_of_new_product()" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="product-name">Tên bài viết</label>
                            <input type="text" name="title" id="news-title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product-name">Thumbnail</label>
                            <input type="text" name="thumbnail" id="thumbnail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product-description">Nội dung</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control"
                                placeholder="Nội dung..."></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Thêm bài viết mới" class="btn btn-success" name="btn_add_product">
                            <input type="reset" value="Reset" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content end-->
@endsection
