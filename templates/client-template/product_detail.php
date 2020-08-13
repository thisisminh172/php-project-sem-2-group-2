<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chi tiet san pham</title>
    <!-- bootstrap start-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- bootstrap end-->

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header start -->
    <!-- navigation -->
    <div id="header-wp">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <!-- navbar link -->
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <div class="container-fluid">
                            <!-- Brand -->
                            <a class="navbar-brand text-light font-weight-bold bg-danger rounded p-3" id="logo"
                                href="?">YESGEAR</a>
                            <p class="text-light">BẤT cần đời, BUT cần gear</p>

                            <!-- Toggler/collapsibe Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <!-- Navbar links -->
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="btn btn-outline-secondary nav-link text-white font-weight-bold"
                                            href="?page=product"><i class="fas fa-home"></i> Trang chủ</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="btn btn-outline-warning nav-link text-white dropdown-toggle font-weight-bolder"
                                            data-toggle="dropdown" data-display="static" href="#"><i
                                                class="fas fa-gamepad"></i> Sản
                                            phẩm</a>
                                        <div class="dropdown-menu dropdown-menu-left">

                                            <a class="dropdown-item text-dark" href="#">Tai nghe gaming</a>
                                            <a class="dropdown-item" href="#">Bàn phím cơ</a>
                                            <a class="dropdown-item" href="#">Chuột gaming</a>
                                            <a class="dropdown-item" href="#">Bàn ghế gaming</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-outline-secondary nav-link text-white font-weight-bold"
                                            href="#"><i class="far fa-address-card"></i> Giới thiệu</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="btn btn-outline-secondary nav-link text-white font-weight-bold"
                                            href="#"><i class="far fa-newspaper"></i> Tin tức</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-outline-secondary nav-link text-white font-weight-bold"
                                            href="#"><i class="fas fa-phone"></i> Liên hệ</a>
                                    </li>
                                    <li class="nav-item">
                                        <form class="form-inline" action="" id="search-box">
                                            <input class="form-control" type="text" placeholder="Nhập tên sản phẩm...">
                                            <button class="btn btn-outline-success" type="submit"><i
                                                    class="fas fa-search"></i>
                                                Search</button>
                                        </form>
                                    </li>
                                    <li class="nav-item pt-2">
                                        <div id="cart-wp">
                                            <div id="cart"><i class="fas fa-shopping-cart text-danger"></i> <a href=""
                                                    class="text-white">Giỏ hàng (<b>0</b> sản phẩm)</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    <!--end navigation -->

    <div class="container-fluid mr-1">
        <div class="row">
            <!-- header end -->

            <!-- sidebar start -->
            <div id="sidebar-wp" class="col-md-2 col-sm-12">
                <div class="container">
                    <ul id="sidebar">
                        <li><a href=""><i class="fas fa-headphones"></i> Tai nghe gaming</a></li>
                        <li><a href=""><i class="fas fa-keyboard"></i> Bàn phím cơ</a></li>
                        <li><a href=""><i class="fas fa-mouse"></i> Chuột gaming</a></li>
                        <li><a href=""><i class="fas fa-chair"></i> Bàn ghế gaming</a></li>
                    </ul>
                </div>

            </div>
            <!-- sidebar end -->


            <!-- content start -->
            <div class="col-lg-5 col-md-5 mb-5">
                <div>
                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid"
                                    src="https://product.hstatic.net/1000026716/product/tai-nghe-asus-rog-delta-white-4_019fff0012a34f4d85d27b725bd78e3e.jpg"
                                    width="1400" height="450" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid"
                                    src="https://product.hstatic.net/1000026716/product/tai-nghe-asus-rog-delta-white-1_05526deab7674a66852f866d006228f3.jpg"
                                    width="1400" height="450" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid"
                                    src="https://product.hstatic.net/1000026716/product/tai-nghe-asus-rog-delta-white-5_6abda4b5551c41cf95fbb8f343c46df7.jpg"
                                    width="1400" height="450" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev" style="color:blue">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next" style="color:blue">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 mb-5">
                <div class="container">
                    <h2>Thông tin chi tiết sản phẩm</h2>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Thuộc tính</th>
                                <th>Thông số</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nhà sản xuất</td>
                                <td>Asus</td>
                            </tr>
                            <tr>
                                <td>Tình trạng</td>
                                <td>Mới</td>
                            </tr>
                            <tr>
                                <td>Bảo hành</td>
                                <td>24 tháng</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="container text-center">
                        <div class="row">
                            <a href="" class="btn btn-success col py-2">MUA HÀNG</a>
                            <a href="" class="btn btn-danger col py-2">THÊM VÀO GIỎ</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">

                </div>
                <div>
                    <h5>Bình luận</h5>
                    <input type="text" id="" name="" class="text-info">
                    <a href="" class="btn btn-info">Gửi</a>
                </div>
            </div>
        </div>
        <!-- content end -->

        <!-- footer start -->
    </div>
    </div>
    <footer class="container-fluid">
        <div id="footer-wp">
            <div>
                <p>© 2020 Công Ty Cổ Phần Máy Tính Hà Nội</p><br>
                <p>Địa chỉ: Số 129 + 131, phố Lê Thanh Nghị, Phường Đồng Tâm, Quận Hai Bà Trưng, Hà Nội</p><br>
                <p>GPĐKKD số 0101161194 do Sở KHĐT Tp.Hà Nội cấp ngày 31/8/2001</p><br>
                <p>Email: hnc@hanoicomputer.com. Điện thoại: 1900 1903</p>
            </div>

        </div>
    </footer>
    <!-- footer end -->





    <!-- bootstrap start-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- bootstrap end-->
</body>

</html>