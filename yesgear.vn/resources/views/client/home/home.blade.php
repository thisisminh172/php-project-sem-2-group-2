@extends('layout.layout')
@section('content')
<!-- content start -->
<div id="body-wp" class="">
    <div class="container">
        {{-- calrosel starts--}}
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                src="https://hanoicomputercdn.com/media/banner/07_Sep0ad42534737bdef8a6e0feb068e0b5da.jpg"
                                width="1400" height="450" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="https://hanoicomputercdn.com/media/banner/30_Jun002e814b718497418291b567512c7463.jpg"
                                width="1400" height="450" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="https://hanoicomputercdn.com/media/banner/30_Jun002e814b718497418291b567512c7463.jpg"
                                width="1400" height="450" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- calrosel ends--}}


        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="{{url('product/detail/1')}}"><img class="card-img-top"
                            src="https://hanoicomputercdn.com/media/product/250_48195_tai_nghe_zidli_zh20_led_rgb_usb_1.jpg"
                            width="525px" height="300px" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="product_detail.php">Tai nghe Zidli ZH20 7.1 Led RGB USB</a>
                        </h5>
                        <h5>549.000đ</h5>

                    </div>
                    <div class="container text-center">
                        <div class="row">
                            <a href="" class="btn btn-success col py-2">Mua hàng</a>
                            <a href="" class="btn btn-danger col py-2">Thêm vào giỏ</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

</div>
<!-- content end -->
@endsection
