<!-- sidebar start -->
<div id="product-sidebar-wp" class="">
    <form class="form-horizontal" action="{{ url('client/filter') }}" method="get">
        <h4>Thương hiệu</h4>
        <hr>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <label for="sel1">Chọn thương hiệu</label>
                <select id="du" name="brand_code" value="du" data-filter="make" class="filter-make filter form-control">
                    @foreach ($brands as $brand)
                        <option>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <h4>Loại sản phẩm</h4>
        <hr>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <label for="sel1">Chọn loại sản phẩm</label>
                <select id="du" name="category_code" value="" data-filter="make"
                    class="filter-make filter form-control">
                    @foreach ($categories as $category)
                        <option>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <h4>Giá tiền</h4>
        <hr>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="" name="price" value='1'> Ít
                        hơn 500k</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="" name="price" value='2'> Tu
                        500k den 3tr</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="" name="price" value='3'> Hon
                        3tr</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success" href="{{ url('') }}"> Lọc</button>
            </div>
        </div>
    </form>
</div>
<!-- sidebar end -->
