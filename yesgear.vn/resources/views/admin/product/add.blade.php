@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3 class="text-danger">Thêm sản phẩm mới</h3>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
        <div class="row">
            <div class="col">
                <form action="{{url('admin/product/store')}}" id="form-add-product" method="post"
                    onsubmit="return check_data_of_new_product()" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="name" id="product-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="product-thumbnail">Thumbnail (Hình đại diện sản phẩm)</label>
                        <input type="file" name="thumbnail" id="product-thumbnail" class="form-control-file" required>
                    </div>

                    <div class="form-group d-inline-block">
                        <label for="">Hình sản phẩm</label><br>
                        Hình sản phẩm: <input type="file" name="product_image[]" id="" class="form-control-file"
                            multiple>

                    </div>
                    <div class="form-group">
                        <label for="product-category">Phân loại</label>
                        <select class="form-control" id="product-category" name="category_code" required>
                            <option value="" checked>---Chọn phân loại---</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->code}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product-brand">Thương hiệu</label>
                        <select class="form-control" id="product-brand" name="brand_code" required>
                            <option value="" checked>---Chọn thương hiệu---</option>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->code}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product-price">Đơn giá (VND)</label>
                        <input type="number" name="price" id="product-price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="product-store">Số lượng nhập kho (0-1000 đơn vị)</label>
                        <input type="number" name="quantity" id="product-store" min="1" max="1000" required>
                    </div>
                    <div class="form-group">
                        <label for="product-description">Mô tả</label>
                        <textarea name="describe" id="product-description" cols="30" rows="10" class="form-control"
                            placeholder="Nội dung..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tech-info">Thông số kỹ thuật (Lưu ý: nên nhập dạng danh sách) (Không bắt buộc)</label>
                        <textarea name="tech_info" id="tech-info" cols="30" rows="10" class="form-control"
                            placeholder="Thông số kỹ thuật...">
                        <ul>
                            <li>Thương hiệu: </li>
                            <li>Tên sản phẩm: </li>
                            <li>Màu sắc: </li>
                        </ul>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Thêm sản phẩm mới" class="btn btn-success" name="btn_add_product">
                        <input type="reset" value="Reset" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- content end-->
@endsection
