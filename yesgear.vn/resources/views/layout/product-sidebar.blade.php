<!-- sidebar start -->
<div id="product-sidebar-wp" class="">
    <form class="form-horizontal" action="{{ url('product/filter') }}" method="post">
        {{csrf_field()}}
        <h4>Lọc sản phẩm</h4>
        <hr>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <label for="">Chọn thương hiệu</label>
                <select id="" name="brand_code" value="" class="form-control">
                    <option value="" checked>--Chọn--</option>
                    @foreach ($brands as $brand)
                    <option value="{{$brand->code}}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <hr>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <label for="">Chọn loại sản phẩm</label>
                <select name="category_code" id="" class="form-control">
                    <option value="" checked>--Chọn--</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->code}}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <label for="">Chọn khoảng tiền</label>
                <select name="price" id="" class="form-control">
                    <option value="" checked>--Chọn--</option>
                    <option value="1">Dưới 500.000đ</option>
                    <option value="2">Từ 500.000đ đến 3.000.000đ</option>
                    <option value="3">Trên 3.000.000đ</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 w-100">
                <input type="submit" value="Lọc sản phẩm" name="btn_search" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
<!-- sidebar end -->
