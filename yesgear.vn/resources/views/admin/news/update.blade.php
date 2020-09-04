@extends('layout.admin-layout')

@section('content')
    <!-- +++++++++++++++++++++ -->
    <!-- content start-->
    <div id="wp-content" class="bg-light w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 alert alert-light">
                    <h3 class="text-danger">Cập nhật thông tin bài viết</h3>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <form action="{{ url("admin/news/update/store/{$u->id}") }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" name="id" value="{{ $product->id }}">
                        --}}
                        <div class="form-group">
                            <label for="product-name">Tên bài viết</label>
                            <input type="text" name="title" id="news-title" value="{{ $u->title }}" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="text" name="thumbnail" id="thumbnail" value="{{ $u->thumbnail }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <input type="text" name="content" id="content" value="{{ $u->content }}" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Cập nhật" class="btn btn-success" name="btn_add_product">
                            <input type="reset" value="Reset" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content end-->
@endsection
