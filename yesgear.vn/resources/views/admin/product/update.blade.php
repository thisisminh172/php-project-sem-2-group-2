@extends('layout.admin-layout')

@section('content')
<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3 class="text-danger">Cập nhật thông tin sản phẩm</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="productName" id="product-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="product-thumbnail">Thumbnail (Hình đại diện sản phẩm)</label>
                        <input type="file" name="productThumbnail" id="product-thumbnail" class="form-control-file">
                    </div>

                    <div class="form-group d-inline-block">
                        <label for="">Hình sản phẩm</label><br>
                        Hình 1: <input type="file" name="product_image_1" id="" class="form-control-file">
                        Hình 2: <input type="file" name="product_image_2" id="" class="form-control-file">
                        Hình 3: <input type="file" name="product_image_3" id="" class="form-control-file">
                        Hình 4: <input type="file" name="product_image_4" id="" class="form-control-file">

                    </div>
                    <div class="form-group">
                        <label for="product-category">Phân loại</label>
                        <select class="form-control" id="product-category" name="productCategory">
                            <option value="" checked>---Chọn phân loại---</option>
                            <option value="tn">Tai nghe</option>
                            <option value="bp">Bàn phím</option>
                            <option value="ch">Chuột</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product-brand">Thương hiệu</label>
                        <select class="form-control" id="product-brand" name="productBrand">
                            <option value="" checked>---Chọn thương hiệu---</option>
                            <option value="rz">RAZOR</option>
                            <option value="lt">LOGITECH</option>
                            <option value="du">DAREU</option>
                            <option value="as">ASUS</option>
                            <option value="cs">CORSAIR</option>
                            <option value="ed">E-DRA</option>
                            <option value="ss">STEELSERIES</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product-price">Đơn giá (VND)</label>
                        <input type="number" name="productPrice" id="product-price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="product-description">Mô tả</label>
                        <textarea name="productDescription" id="product-description" cols="30" rows="10"
                            class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product-store">Số lượng nhập kho (0-1000 đơn vị)</label>
                        <input type="number" name="productStore" id="product-store" value="1" min="0" max="1000">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Cập nhật sản phẩm" class="btn btn-success">
                        <input type="reset" value="Reset" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- content end-->
@endsection
