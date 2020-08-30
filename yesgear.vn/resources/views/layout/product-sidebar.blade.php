<!-- sidebar start -->
<div id="product-sidebar-wp" class="">
    <form class="form-horizontal" action="{{ url('client/filter') }}" method="get">
        <h4>Thương hiệu</h4>
        <hr>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="du" name="brand_code" value="du" data-filter="make"
                            class="filter-make filter"> Dareu</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="rz" name="brand_code" value="rz" data-filter="make"
                            class="filter-make filter"> Razer</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="lt" name="brand_code" value="lt" data-filter="make"
                            class="filter-make filter"> Logitech</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="cs" name="brand_code" value="cs" data-filter="make"
                            class="filter-make filter"> Corsair</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="ss" name="brand_code" value="ss" data-filter="make"
                            class="filter-make filter"> StealSeries</label>
                </div>
            </div>
        </div>

        <h4>Loại sản phẩm</h4>
        <hr>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="tn" name="category_code" value="tn" data-filter="make"
                            class="filter-make filter"> Tai nghe</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="ch" name="category_code" value="ch" data-filter="make"
                            class="filter-make filter"> Chuột</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="bp" name="category_code" value="bp" data-filter="make"
                            class="filter-make filter"> Bàn phím</label>
                </div>
            </div>
        </div>

        <h4>Giá tiền</h4>
        <hr>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="" name="price" value='400000'> Ít hơn 500k</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="" name="price" value='1000000'> Từ 500k đến 3tr</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label><input type="radio" id="" name="price" value='4000000'> Hơn 3tr</label>
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
