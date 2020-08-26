<div class="wp-body"
    style="background-color: rgb(230, 230, 230); min-height: 500px;width: 960px;margin: 0 auto;font-family:Arial,Helvetica,sans-serif;box-shadow:5px 5px 10px #888888;">
    <h3 class="logo" style="background-color:#343a40; line-height: 80px; color: white;font-size:2rem;margin:0px;">
        <div class="logo-text" style="margin-left: 2rem;">
            YES<span style="color: #dc3545">GEAR</span>
        </div>
    </h3>
    <div class="wp-content" style="background-color:#ffffff;min-height:auto;">
        <div class="box" style="padding: 2rem;">
            <div class="title" style="font-size: 1.5rem; margin-right: 1rem;">Nội dung thanh toán</div>
            <div class="body">
                <ul>
                    <li>Tên khách hàng: <b>{{$name}}</b></li>
                    <li>Số điện thoại: <b>{{$phone}}</b></li>
                    <li>Email: <b>{{$email}}</b></li>
                    <li>Địa chỉ giao hàng: <b>{{$address}}</b></li>
                    <li>Nội dung thanh toán: <b>{{$payment_content}}</b></li>
                </ul>
            </div>
        </div>
        <div class="box" style="padding: 2rem;">
            <div class="title" style="font-size: 1.5rem; margin-right: 1rem;">Thông tin chuyển khoản</div>
            <p>Ngân hàng: <b>Techcombank</b></p>
            <p>Chi nhánh: <b>Ông Tạ</b></p>
            <p>Số tài khoản: <b>99731237653483</b></p>
            <p>Chủ tài khoản: <b>LÊ MINH</b></p>
            <p>Nội dung chuyển khoản: <b>{{$payment_content}}</b></p>
            <p>Số tiền cần chuyển: <b>{{$total}}</b></p>
        </div>
        <a href="{{$home_page}}">Quay lại trang chủ</a>
    </div>

</div>
