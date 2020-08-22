<!-- header start -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YES GEAR</title>
    <!-- bootstrap start-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- bootstrap end-->

    <!-- ajax start-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- ajax end-->

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- style -->
    <link rel="stylesheet" href="{{asset('client-style.css')}}">

</head>

<body>
    <!-- navigation -->
    <div id="header-wp">
        <div class="container-fluid bg-dark">
            <!-- navbar link -->
            <!-- LOGO -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a class="" id="logo" href="{{url('home')}}"><span
                                class="text-light font-weight-bold">YES</span><span
                                class="text-danger font-weight-bold">GEAR</span></a>
                        <p class="text-light d-inline-block">BẤT cần đời, BUT cần gear</p>
                    </div>
                    <div id="cart-wp" class="col mt-3 text-right">
                        <a href="" id="cart" class="text-light p-2"><i class="fas fa-shopping-cart"></i> Giỏ hàng <span
                                class="text-danger"> (5 sản phẩm)</span></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled">
                            <li class="d-inline-block"><a href="{{url('home')}}"
                                    class="text-light font-weight-bold mr-5">TRANG
                                    CHỦ</a></li>
                            <li class="d-inline-block"><a href="{{url('product/show')}}"
                                    class="text-warning font-weight-bold mr-5">SẢN PHẨM</a></li>
                            <li class="d-inline-block"><a href="{{url('intro')}}"
                                    class="text-light font-weight-bold mr-5">GIỚI THIỆU</a>
                            </li>
                            <li class="d-inline-block"><a href="{{url('news')}}"
                                    class="text-light font-weight-bold mr-5">TIN TỨC</a></li>
                            <li class="d-inline-block"><a href="{{url('contact')}}"
                                    class="text-light font-weight-bold mr-5">LIÊN
                                    HỆ</a></li>
                            <li class="d-inline-block">
                                <!-- <form action="" id="search-box" class="input-group">
                                    <input type="text" name="product_name" id="product_name"
                                        class="form-control" placeholder="Tên sản phẩm...">
                                    <div id="productList">
                                    </div>
                                    <div class="input-group-append">
                                        <input type="submit" value="Search" class="btn btn-success">
                                    </div>
                                </form> -->
                                <div class="form-group" style="position: relative">
                                    <input type="text" id="search-box" class="form-control"
                                        placeholder="Nhập tên sản phẩm muốn tìm kiếm...">
                                    <div id="productList" style="position: absolute"></div>
                                </div>
                                {{ csrf_field() }}
                                <!-- <div class="form-group">
                                    <input type="text" name="product_name" id="product_name"
                                        class="form-control input-lg" placeholder="Tên sản phẩm..." />
                                    <div id="productList">
                                    </div>
                                </div> -->

                            </li>
                            <!-- <li class="d-inline-block">
                                <div id="productList"></div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end navigation -->
    <!-- header end -->