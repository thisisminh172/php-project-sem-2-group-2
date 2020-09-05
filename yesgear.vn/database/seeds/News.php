<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class News extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('news')->insert([
            'title' => '"Chính thức" ra mắt ổ cắm điện kiêm sạc không dây, sạc nhanh 18W, giá chỉ từ 400 nghìn đồng',
            'thumbnail' => 'http://chiemtaimobile.vn/images/thumbnails/300/214/detailed/23/tin-tuc-o-cam-dien-kiem-sac-khong-day-xiaomi-ava.jpg',
            'content' => '<div class="blog-content ty-wysiwyg-content">
            <p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;">Xiaomi đã ra mắt một sản phẩm thông minh mới dưới nền tảng Youpin. Sản phẩm có tên là <strong>đồng hồ để bàn thông minh Xiaomi Seconds</strong>, kiêm luôn <span style="color:#f39c12;">nhiệt kế</span> và <span style="color:#f39c12;">ẩm kế</span>. Mặc dù được tích hợp nhiều chức năng nhưng mức giá được bán ra khá phải chăng, chỉ <span style="color:#f39c12;">149 NDT</span> - tương đương <span style="color:#f39c12;">504 ngàn đồng</span>.</span></span></p>

<p style="text-align: center;"><a href="https://lh3.googleusercontent.com/pw/ACtC-3eB5YPG_Rjz4N2EPiTrGqL9i-kW3XOF9YK6c_chW70kByj3CP86LWhxhqMBnTKurh8pSoNN8bNYYNKvAETtLuAChPzL0aHUQACPjRTesl7sWbF9Hx8EGR8zTELIKN1Sj0jLGmJm2z32dCvUBOXUTh4MOg=s800-no?authuser=0" target="_blank"><img alt="" src="https://lh3.googleusercontent.com/pw/ACtC-3eB5YPG_Rjz4N2EPiTrGqL9i-kW3XOF9YK6c_chW70kByj3CP86LWhxhqMBnTKurh8pSoNN8bNYYNKvAETtLuAChPzL0aHUQACPjRTesl7sWbF9Hx8EGR8zTELIKN1Sj0jLGmJm2z32dCvUBOXUTh4MOg=s800-no?authuser=0" style="width: 650px; height: 471px;"></a></p>

<p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;">Đúng như tên gọi của nó, sản phẩm vừa là một chiếc đồng hồ để bàn, đồng thời cũng đóng vai trò như một nhiệt kế, ẩm kế. Thiết bị sử dụng màn hình <span style="color:#f39c12;">mực điện tử</span> nên khả năng hiển thị rất tốt kể cả dưới ánh nắng do độ tương phản của màn hình này rất cao và cũng tiêu tốn ít năng lượng. Bên cạnh đó, nó cũng đảm bảo các chức năng cơ bản như báo thức, hẹn giờ, giám sát nhiệt độ và độ ẩm,… Đặc biệt, n</span></span><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;">hờ vào cảm biến kỹ thuật số của <span style="color:#f39c12;">Swiss Sensirion</span> mà <em>chiếc đồng hồ</em> này có thể phát hiện nhanh chóng và chính xác những thay đổi về nhiệt độ và độ ẩm.</span></span></p>

<p style="text-align: center;"><a href="https://lh3.googleusercontent.com/pw/ACtC-3eF2HwDeNh1QXeEJRdaAh3VVYiCeZYW_BL85DyHD0wrnMJ-p7ipf8K7tx-wAw56M_KaNXs01jyeDwJAz2EZERiwUNrn4qZZsJ4mPyiJBMHWxdc0PYTgQXsQSvUL3CMtFR6icmhH-F_4--RH2JjurWjeXw=s750-no?authuser=0" target="_blank"><img alt="" src="https://lh3.googleusercontent.com/pw/ACtC-3eF2HwDeNh1QXeEJRdaAh3VVYiCeZYW_BL85DyHD0wrnMJ-p7ipf8K7tx-wAw56M_KaNXs01jyeDwJAz2EZERiwUNrn4qZZsJ4mPyiJBMHWxdc0PYTgQXsQSvUL3CMtFR6icmhH-F_4--RH2JjurWjeXw=s750-no?authuser=0" style="width: 650px; height: 393px;"></a></p>

<p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;"><strong>Đồng hồ thông minh</strong> này cũng hỗ trợ ghép nối <span style="color:#f39c12;">Bluetooth</span> và kết nối với ứng dụng <span style="color:#f39c12;">Mijia</span>. Nhờ đó, nó có thể được liên kết với các thiết bị thông minh khác để người dùng tiện điều chỉnh hệ thống sưởi và làm mát trong nhà, nhằm đem lại không gian thoải mái nhất cho ngôi nhà. Với ứng dụng Mijia, bạn còn có thể tùy chỉnh <span style="color:#f39c12;">18 nhóm đồng hồ báo thức</span> khác nhau khá tiện lợi.</span></span></p>

<p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;">Sản phẩm còn được tích hợp <span style="color:#f39c12;">chip xung nhịp RTC</span> giúp hiển thị chính xác thời gian khi bật nguồn. Ngoài ra, <span style="color:#f39c12;">pin dự phòng</span> đi kèm sản phẩm cũng giúp người dùng dễ dàng thay pin khi đồng hồ hết pin.</span></span></p>

<p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:Arial,Helvetica,sans-serif;">Đồng hồ này cũng hỗ trợ chức năng <span style="color:#f39c12;">hẹn giờ</span> khởi động bằng một phím. Cụ thể, chức năng hẹn giờ có <span style="color:#f39c12;">2 cách đếm</span>: tiến và lùi, được thiết kế để đáp ứng mọi nhu cầu về thời gian của người dùng trong cuộc sống.</span></span></p>

        </div>'
        ]);
        DB::table('news')->insert([
            'title' => '',
            'thumbnail' => '',
            'content' => ''
        ]);
        DB::table('news')->insert([
            'title' => '',
            'thumbnail' => '',
            'content' => ''
        ]);
        DB::table('news')->insert([
            'title' => '',
            'thumbnail' => '',
            'content' => ''
        ]);
        DB::table('news')->insert([
            'title' => '',
            'thumbnail' => '',
            'content' => ''
        ]);
    }
}
