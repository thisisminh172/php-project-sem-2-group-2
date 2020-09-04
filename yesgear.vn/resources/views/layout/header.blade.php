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

    <!-- ajax start (jquery)-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- ajax end-->

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- style -->
    <link rel="stylesheet" href="{{asset('client-style.css')}}">

</head>

<body>
    <style>
        .dropdown-cart {
            position: relative;
        }

        .dropdown-cart-list {
            position: absolute;
            z-index: 1500;
            background-color: white;
            right: 0px;
            top: 30px
        }

        li.dropdown-item img {
            display: inline-block;
            float: left;
        }

        li.dropdown-item p {
            display: inline-block;
            float: left;
            padding: 1rem;
        }

        .dropdown-cart>.dropdown-cart-list {
            opacity: 0;
            min-width: 300px;
            border-radius: 10px;
            border: 1px solid #949494;
            transition: opacity 0.3s ease;
        }

        .dropdown-cart:hover>.dropdown-cart-list {

            opacity: 1;
        }

        .dropdown-cart-list>.button-cart {
            /* margin-top: 2rem; */
            padding: 1rem;
        }

        .dropdown-cart-list>.button-cart>a {
            width: 300px;
        }

        #dropdown-link {
            position: relative;
        }

        #dropdown-link #wp-dropdown-menu {
            position: absolute;
            top: 30px;
            left: 0px;
            border: 1px solid #dddddd;
            background-color: #ffffff;
            z-index: 1600;
            width: 250px;
            box-shadow: 1px 1px 2px #9b9b9b;
            opacity: 0;
            transition: opacity 0.3s ease-out;

        }

        #dropdown-link:hover>#wp-dropdown-menu {
            opacity: 1;
        }

        #dropdown-link #wp-dropdown-menu li {
            display: block;
            margin-bottom: 0.5rem;
            margin-left: 1rem;
        }

        #dropdown-link #wp-dropdown-menu li:hover a {
            color: #ffc107;
        }

        #wp-dropdown-menu li a {
            font-size: 1.2rem;
            transition: 0.3s ease;
        }
    </style>
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


                        <div class="dropdown-cart">
                            <a href="{{url('cart/show')}}" id="cart" class="text-danger p-2"><i
                                    class="fas fa-shopping-cart"></i> Giỏ hàng <span class="text-success"> (<span
                                        id="cart-count">{{Cart::count()}}</span> sản phẩm)</span></a>
                            <div class="dropdown-cart-list">
                                <table class="text-center">
                                    @foreach (Cart::content() as $row)
                                    <tr class="dropdown-item">
                                        <td><img src="{{asset($row->options->thumbnail)}}" alt="" width="70px"></td>
                                        <td class="">
                                            <p>{{$row->name}}</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold text-danger"> x {{$row->qty}}</p>
                                        </td>

                                    </tr>
                                    @endforeach
                                </table>
                                <p class="text-danger p-2 mr-1">Tổng giá trị giỏ hàng: {{Cart::total()}}</p>
                                <div class="button-cart">
                                    <a href="{{url('order/add')}}" class="btn btn-outline-danger">Thanh toán</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled">
                            <li class="d-inline-block pb-2"><a href="{{url('home')}}"
                                    class="text-light font-weight-bold mr-5">TRANG
                                    CHỦ</a></li>
                            <li id="dropdown-link" class="d-inline-block pb-2"><a href="{{url('product/show')}}"
                                    class="text-warning font-weight-bold mr-5">SẢN PHẨM</a>
                                <ul id="wp-dropdown-menu" class="" style="list-style-type: none;">
                                    <li><a href="{{url('product/show/cat/bp')}}"><i class="far fa-keyboard"></i> Bàn phím gaming</a></li>
                                    <li><a href="{{url('product/show/cat/tn')}}"><i class="fas fa-headset"></i> Tai nghe gaming</a></li>
                                    <li><a href="{{url('product/show/cat/ch')}}"><i class="fas fa-mouse-pointer"></i> Chuột gaming</a></li>
                                </ul>
                            </li>
                            <li class="d-inline-block pb-2"><a href="{{url('intro')}}"
                                    class="text-light font-weight-bold mr-5">GIỚI THIỆU</a>
                            </li>
                            <li class="d-inline-block pb-2"><a href="{{url('news')}}"
                                    class="text-light font-weight-bold mr-5">TIN TỨC</a></li>
                            <li class="d-inline-block pb-2"><a href="{{url('contact')}}"
                                    class="text-light font-weight-bold mr-5">LIÊN
                                    HỆ</a></li>
                            <li class="d-inline-block pb-2">
                                <div class="form-group" style="position: relative">
                                    <input type="text" id="search-box" class="form-control"
                                        placeholder="Nhập tên sản phẩm muốn tìm kiếm...">
                                    <div id="productList" style="position: absolute"></div>
                                </div>
                                {{ csrf_field() }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end navigation -->
    {{-- script starts --}}

    <script>
        $(document).ready(function() {

        $('#search-box').keyup(function() { //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
            var query = $(this).val(); //lấy gía trị ng dùng gõ
            if (query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
            {
                var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                $.ajax({
                    url: "{{ route('home.find') }}", // đường dẫn khi gửi dữ liệu đi 'search', là tên route đã đặt
                    method: "POST", // phương thức gửi dữ liệu.
                    data: {
                        query: query,
                        _token: _token
                    },
                    success: function(data) { //dữ liệu nhận về
                        $('#productList').fadeIn();
                        $('#productList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là productList
                    }
                });
            }
        });

        $(document).on('click', 'li', function() {
            $('#search-box').val($(this).text());
            $('#productList').fadeOut();
        });

    });
    </script>

    {{-- script ends --}}
    <!-- header end -->
