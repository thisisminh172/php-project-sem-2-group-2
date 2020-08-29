<!-- sidebar start -->
<div id="product-sidebar-wp" class="">
    <form class="form-horizontal" action="{{ url('client/filter') }}" method="get">
        <h4>Thương hiệu</h4>
        <hr>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="du" name="brand_code[]" value="du"> Dareu</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="rz" name="brand_code[]" value="rz"> Razer</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="lt" name="brand_code[]" value="lt"> Logitech</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="cs" name="brand_code[]" value="cs"> Corsair</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="ss" name="brand_code[]" value="ss"> StealSeries</label>
                </div>
            </div>
        </div>


        <h4>Loại sản phẩm</h4>
        <hr>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="tn" name="category_code"> Tai nghe</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="ch" name="category_code"> Chuột</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="bp" name="category_code"> Bàn phím</label>
                </div>
            </div>
        </div>

        <h4>Giá tiền</h4>
        <hr>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="price1" name="price"> Dưới 500k</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="price2" name="price"> Từ 500k đến 3tr</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="price3" name="price"> Từ 3tr đến 10tr</label>
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
