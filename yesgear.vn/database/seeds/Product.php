<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
            'name' => 'Chuột chơi game ASUS Cerberus Optical Gaming Mouse',
            'thumbnail' => 'uploads/chuotas.jpg',
            'brand_code' => 'as',
            'category_code' => 'ch',
            'image_url' => '["uploads\/chuotas1.jpg","uploads\/chuotas2.jpg","uploads\/chuotas3.jpg"]',
            'describe' => 'Đang cập nhật...',
            'tech_info' => '<ul>
                            <li>THương hiệu: ASUS</li>
                            <li>Tên sản phẩm: Ceberus</li>
                            <li>Màu sắc: đen</li></ul>',
            'price' => 399000,
            'quantity' => 300
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn phím Gaming Asus TUF K1 RGB',
            'thumbnail' => 'uploads/phimas.jpg',
            'brand_code' => 'as',
            'category_code' => 'bp',
            'image_url' => '["uploads\/phimas1.jpg","uploads\/phimas2.jpg","uploads\/phimas3.jpg","uploads\/phimas4.jpg"]',
            'describe' => '
            <div class="nd title_box_scroll_content_2019">
                  <h2 class="ddnb-title spct-title">Đánh giá sản phẩm Bàn phím Gaming Asus TUF K1 RGB</h2>

                     <h3><img src="https://hanoicomputercdn.com/media/lib/53482_gioi-thieu-ban-phim-gaming-asus-tuf-k1-rgb.jpg" alt="Giới thiệu Bàn phím Gaming Asus TUF K1 RGB" width="100%"></h3>
<h3>Hiệu năng dành cho trò chơi</h3>
<p>TUF Gaming K1 mang đến phản ứng xúc giác tuyệt vời với hành động&nbsp; vừa yên tĩnh vừa thoải mái. Nó cũng được thiết kế với công nghệ rollover 19 phím (NKRO), đảm bảo độ chính xác vượt trội và không bị bấm phím nhầm</p>
<p><img src="https://hanoicomputercdn.com/media/lib/53482_switch-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg" alt="Công nghệ NKRO của Bàn phím Gaming Asus TUF K1 RGB" width="100%"></p>
<h3>Hiệu ứng RGB động và thanh ánh sáng</h3>
<p>TUF Gaming K1 có năm vùng chiếu sáng riêng biệt và các thanh RGB nổi bật ở cả hai bên. Mỗi vùng được tùy chỉnh riêng từ toàn bộ phổ màu, cho phép bạn thể hiện cá tính. Ứng dụng ASUS Armory Crate cung cấp điều khiển RGB thế hệ tiếp theo, đồng bộ hóa cấu hình ánh sáng và trò chơi với nội dung của bạn.</p>
<p><img src="https://hanoicomputercdn.com/media/lib/53482_den-led-rgb-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg" alt="Các hiệu ứng đèn led RGB của Bàn phím Gaming Asus TUF K1 RGB" width="100%"></p>
<h3>Núm chỉnh volume tiện lợi</h3>
<p>Với núm chỉnh âm lượng chuyên dụng ở góc trên bên phải, TUF Gaming K1 giúp điều khiển âm thanh trò chơi của bạn nhanh chóng và dễ dàng. Bạn có thể tiếp cận và&nbsp;vặn bằng trực giác, giữ cho đôi mắt của bạn tập trung vào việc chơi game.</p>
<p><img src="https://hanoicomputercdn.com/media/lib/53482_num-chinh-volume-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg" alt="Núm chỉnh Volume của Bàn phím Gaming Asus TUF K1 RGB" width="100%"></p>
<h3>Kê tay công thái học và chân chống có thể tuỳ chỉnh</h3>
<p>Với kê tay có thể tháo rời và chân chống có thể điều chỉnh 2 mức độ chiều cao. TUF Gaming K1 có thiết kế công thái học cho sự thoải mái tuyệt đối</p>
<p><img src="https://hanoicomputercdn.com/media/lib/53482_ke-tay-va-chan-chong-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg" alt="Kê tay và chân chống của Bàn phím Gaming Asus TUF K1 RGB" width="100%"></p>
<h3>Lớp vỏ đặc biệt chống tràn</h3>
<p>Trong và ngoài, TUF Gaming K1 được thiết kế cho độ bền bỉ dài qua nhiều năm. Lớp vỏ bên ngoài được phủ 1 lớp phủ chuyên dụng có thể chịu được các bài kiểm tra về mài mòn, ma sát nghiêm ngặt. Và khả năng chống tràn đến 300ml đảm bảo rằng việc đổ nước sẽ không làm hỏng bản phím</p>
<p><img src="https://hanoicomputercdn.com/media/lib/53482_tinh-nang-chong-nuoc-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg" alt="Lớp vỏ đặc biệt của Bàn phím Gaming Asus TUF K1 RGB" width="100%"></p>
<h3>Amoury Crate</h3>
<p>ASUS Armory Crate&nbsp;hợp nhất các điều khiển hệ thống và ánh sáng để đặt các cài đặt thiết yếu trong tầm tay bạn trong một phần mềm duy nhất. Dễ dàng tạo và xác định và tùy chỉnh cấu hình kịch bản, keymap, ghi macro và hơn thế nữa. Bạn thậm chí có thể theo dõi các số liệu thống kê phần cứng trong khi chơi trò chơi để phân tích dữ liệu giải trí.</p>
<p><img src="https://hanoicomputercdn.com/media/lib/53482_phan-mem-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg" alt="Phần mềm của Bàn phím Gaming Asus TUF K1 RGB" width="100%"></p>
<h3>Cấu hình với Memory Onboard</h3>
<p>TUF Gaming K1 có tám phím lập trình được với hỗ trợ ghi macro nhanh chóng, giúp dễ dàng định cấu hình bàn phím của bạn để cá nhân hóa. Và ba tùy chỉnh cộng với một bộ nhớ trên bo mạch mặc định cho phép bạn&nbsp;mang bàn phím đi bất cứ đâu với cài đặt tuỳ chỉnh sẵn</p>
<p><img src="https://hanoicomputercdn.com/media/lib/53482_memory-onboard-cua-ban-phim-gaming-asus-tuf-k1-rgb.jpg" alt="Bộ nhớ trong của Bàn phím Gaming Asus TUF K1 RGB" width="100%"></p>
<p>&nbsp;</p>
<p>&nbsp;</p>

                </div>

            ',
            'tech_info' => '<ul>
                            <li>THương hiệu: ASUS</li>
                            <li>Tên sản phẩm: TUF K1</li>
                            <li>Màu sắc: đen nhám</li></ul>',
            'price' => 1189000,
            'quantity' => 100
        ]);
        DB::table('products')->insert([
            'name' => 'Tai nghe không dây Gaming Corsair Virtuoso RGB SE Gunmetal',
            'thumbnail' => 'uploads/tainghecs.jpg',
            'brand_code' => 'cs',
            'category_code' => 'tn',
            'image_url' => '["uploads\/tainghecs1.jpg","uploads\/tainghecs2.jpg","uploads\/tainghecs3.jpg","uploads\/tainghecs4.jpg"]',
            'describe' => '<div>
            <p><span class="notranslate"><span id="product-name">&nbsp;Trung thực cao của VIRTUOSO RGB WIRELESS SE - Gunmetal (AP)</span></span></p>
            <h3 id="price">&nbsp;</h3>
            <p id="product-overview"><span class="notranslate">CORSAIR VIRTUOSO RGB Wireless SE mang đến trải nghiệm âm thanh độ trung thực cao, sự thoải mái cả ngày từ miếng đệm tai nghe bọt cao cấp và kết nối siêu nhanh với công nghệ SLIPSTREAM WIRELESS.</span></p>

            </div>
            <img src="https://cwsmgmt.corsair.com/pdp/virtuoso/img/carousel-se-01.jpg" alt="">
            <img src="https://cwsmgmt.corsair.com/pdp/virtuoso/img/carousel-se-02.jpg" alt="">
            <h3 class="h-bebas"><span class="notranslate">CHẤT LƯỢNG ÂM THANH KHÔNG THỎA HIỆP</span></h3>
            <p><span class="notranslate">Từ bước chân nhẹ nhất đến âm bass sâu nhất, bạn sẽ nghe thấy nhiều thứ hơn với VIRTUOSO RGB Wireless.</span>&nbsp;<span class="notranslate">Một cặp trình điều khiển neodymium mật độ cao được điều chỉnh chính xác 50mm tự hào có dải tần số 20Hz-40.000Hz - gấp đôi những gì bạn nhận được từ hầu hết các tai nghe chơi game.</span></p>
            ',
            'tech_info' => '<ul>
                            <li>THương hiệu: Consair</li>
                            <li>Tên sản phẩm: VIRTUOSO RGB WIRELESS SE GUNMETAL</li>
                            <li>Màu sắc: Gunmetal</li></ul>',
            'price' => 5499000,
            'quantity' => 300
        ]);
        DB::table('products')->insert([
            'name' => 'Tai Nghe Dareu Over Ear EH925S PRO Led RGB',
            'thumbnail' => 'uploads/tainghedu.jpg',
            'brand_code' => 'cs',
            'category_code' => 'tn',
            'image_url' => '["uploads\/tainghedu1.jpg","uploads\/tainghedu2.jpg"]',
            'describe' => '<p>Tai nghe DareU EH925S Pro Led RGB</p>
            <img src="https://hanoicomputercdn.com/media/lib/50404_Tai-Nghe-Dareu-EH925S-PRO-Led-RGB-4.png" alt="" width="100%">
            <h3>Thiết kế Ergonomic thoải mái khi đeo</h3>
            <p>Tai nghe chơi game EH925s Pro có khung nhôm tích hợp vừa nhẹ vừa bền, củ tai có thể tinh chỉnh lên xuống, đảm bảo cho sự thoải mái khi đeo lâu, và được thiết kế cho sự cách âm tuyệt vời.</p>
            <img src="https://hanoicomputercdn.com/media/lib/50404_Tai-Nghe-Dareu-EH925S-PRO-Led-RGB-3.png" alt="" width="100%">
            ',
            'tech_info' => '<ul>
                            <li>THương hiệu: Dareu</li>
                            <li>Tên sản phẩm: EH925</li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 949000,
            'quantity' => 150
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn phím cơ Dareu EK169 Mechanical Red Switch Black',
            'thumbnail' => 'uploads/phimdu.jpg',
            'brand_code' => 'du',
            'category_code' => 'bp',
            'image_url' => '["uploads\/phimdu1.jpg","uploads\/phimdu2.jpg","uploads\/phimdu3.jpg","uploads\/phimdu4.jpg"]',
            'describe' => '
            <h3><span>Bàn phím cơ Dareu EK169 Mechanical&nbsp;Red Switch Black</span></h3>
            <p><img src="https://hanoicomputercdn.com/media/lib/46303_ban-phim-co-Dareu-EK169-Mechanical-Red-Switch-Black.png" alt="" width="100%"></p>
            <p><span>Đảm bảo độ bền lâu dài, DareU EK169 Black được thiết kế tương đối chắc chắn. Dây cáp được thiết kế bền bỉ chống rối, kèm theo đầu USB bọc chống nhiễu.</span></p>
            <p><span style="font-size: medium;"><img src="https://hanoicomputercdn.com/media/lib/46303_ban-phim-co-Dareu-EK169-Mechanical-Red-Switch-Black-1.jpg" alt="" width="100%"></span></p>

            ',
            'tech_info' => '<ul>
                            <li>THương hiệu: Dareu</li>
                            <li>Tên sản phẩm: EK619 Black (Red Switch-TK582U08602G)</li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 689000,
            'quantity' => 50
        ]);
        DB::table('products')->insert([
            'name' => 'Chuột chơi game E-Dra EMS612BK Optical USB Black',
            'thumbnail' => 'uploads/chuoted.jpg',
            'brand_code' => 'ed',
            'category_code' => 'ch',
            'image_url' => '["uploads\/chuoted1.jpg","uploads\/chuoted2.jpg"]',
            'describe' => 'Đang cập nhật...',
            'tech_info' => '<ul>
                            <li>THương hiệu: EDRA</li>
                            <li>Tên sản phẩm: Chuột Edra EMS612BK</li>
                            <li>Đèn chuột: Led RGB</li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 239000,
            'quantity' => 500
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn phím cơ E-Dra EK307 Mechanica Gaming',
            'thumbnail' => 'uploads/phimed.jpg',
            'brand_code' => 'ed',
            'category_code' => 'bp',
            'image_url' => '["uploads\/phimed1.jpg"]',
            'describe' => 'Đang cập nhật...',
            'tech_info' => '<ul>
                            <li>THương hiệu: EDRA</li>
                            <li>Tên sản phẩm: EK307 </li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 939000,
            'quantity' => 100
        ]);
        DB::table('products')->insert([
            'name' => 'Tai nghe E-Dra EH492 (7.1, Led vàng, USB)',
            'thumbnail' => 'uploads/taingheed.jpg',
            'brand_code' => 'ed',
            'category_code' => 'tn',
            'image_url' => '["uploads\/taingheed1.jpg"]',
            'describe' => 'Đang cập nhật...',
            'tech_info' => '<ul>
                            <li>THương hiệu: EDRA</li>
                            <li>Tên sản phẩm: Tai nghe E-dra - EH492 - Tai nghe 7.1</li>
                            <li>Màu sắc: Vàng</li></ul>',
            'price' => 849000,
            'quantity' => 100
        ]);
        DB::table('products')->insert([
            'name' => 'Chuột chơi game Logitech G402 USB Black',
            'thumbnail' => 'uploads/chuotlt.jpg',
            'brand_code' => 'lt',
            'category_code' => 'ch',
            'image_url' => '["uploads\/chuotlt1.jpg","uploads\/chuotlt2.jpg","uploads\/chuotlt3.jpg","uploads\/chuotlt4.jpg"]',
            'describe' => '
            <h3>Chuột chơi game Logitech G402</h3>
            <p><img src="https://hanoicomputercdn.com/media/lib/29034_gioi-thieu-mouse-logitech-g402-usb-black.png" alt="Giới thiệu Chuột chơi game Logitech G402" width="100%"></p>
            <h3>TRACKING TỐC ĐỘ CAO VỚI FUSION ENGINE</h3>
            <p>Công nghệ cảm biến tinh vi để chơi game siêu nhanh. Hyperion Fury kết hợp cảm biến quang học sử dụng công nghệ Logitech Delta Zero™ với cảm biến lai Fusion Engine™ độc quyền cho phép tốc độ&nbsp;tracking vượt quá 500 IPS.</p>
            <p><img src="https://hanoicomputercdn.com/media/lib/29034_form-cam-cua-mouse-logitech-g402-usb-black.jpg" alt="Chuột chơi game Logitech G402 có thiết kế cầm nắm thoải mái" width="100%"></p>
            ',
            'tech_info' => '<ul>
                            <li>THương hiệu: Logitech</li>
                            <li>Tên sản phẩm: G402 USB Black</li>
                            <li>Đèn chuột: Xanh da trời</li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 699000,
            'quantity' => 300
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn phím cơ Logitech G610 Orion Blue',
            'thumbnail' => 'uploads/phimlt.jpg',
            'brand_code' => 'lt',
            'category_code' => 'bp',
            'image_url' => '["uploads\/phimlt1.jpg","uploads\/phimlt2.jpg","uploads\/phimlt3.jpg","uploads\/phimlt4.jpg"]',
            'describe' => 'Đang cập nhật...',
            'tech_info' => '<ul>
                            <li>THương hiệu: Logitech</li>
                            <li>Tên sản phẩm: G610 Orion Mechanical</li>
                            <li>Đèn phím: Xanh da trời</li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 1799000,
            'quantity' => 200
        ]);
        DB::table('products')->insert([
            'name' => 'Tai nghe Logitech Astro A10 Gaming',
            'thumbnail' => 'uploads/tainghelt.jpg',
            'brand_code' => 'lt',
            'category_code' => 'tn',
            'image_url' => '["uploads\/tainghelt1.jpg","uploads\/tainghelt2.jpg","uploads\/tainghelt3.jpg","uploads\/tainghelt4.jpg"]',
            'describe' => 'Đang cập nhật...',
            'tech_info' => '<ul>
                            <li>THương hiệu: Logitech</li>
                            <li>Tên sản phẩm: Astro</li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 999000,
            'quantity' => 299
        ]);
        DB::table('products')->insert([
            'name' => 'Chuột chơi game Razer Basilisk FPS Gaming',
            'thumbnail' => 'uploads/chuotrz.jpg',
            'brand_code' => 'rz',
            'category_code' => 'ch',
            'image_url' => '["uploads\/chuotrz1.jpg","uploads\/chuotrz2.jpg","uploads\/chuotrz3.jpg"]',
            'describe' => '<p><img src="https://m.media-amazon.com/images/S/aplus-media/vc/522b3244-80ba-4be1-ab18-5f0a8e17cad7._SR970,300_.jpg" alt=""></p>',
            'tech_info' => '<ul>
                            <li>THương hiệu: Razor</li>
                            <li>Tên sản phẩm: Basilisk </li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 1699000,
            'quantity' => 9
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn phím cơ Razer Blackwidow Elite Green switch',
            'thumbnail' => 'uploads/phimrz.jpg',
            'brand_code' => 'rz',
            'category_code' => 'bp',
            'image_url' => '["uploads\/phimrz1.jpg","uploads\/phimrz2.jpg","uploads\/phimrz3.jpg","uploads\/phimrz4.jpg"]',
            'describe' => '
            <p><img src="/media/lib/44213_hnc-blackwidow-elite-razer-hnc3.jpg" alt="" width="100%"><img src="/media/lib/44213_hnc-blackwidow-elite-razer-hnc1.jpg" alt="" width="100%"><img src="/media/lib/44213_hnc-blackwidow-elite-razer-hnc2.jpg" alt="" width="100%"></p>
            ',
            'tech_info' => '<ul>
                            <li>THương hiệu: Razor</li>
                            <li>Tên sản phẩm:  Blackwidow Elite </li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 3949000,
            'quantity' => 99
        ]);
        DB::table('products')->insert([
            'name' => 'Tai nghe Razer Nari Ultimate Gaming Wireless',
            'thumbnail' => 'uploads/taingherz.jpg',
            'brand_code' => 'rz',
            'category_code' => 'tn',
            'image_url' => '["uploads\/taingherz1.jpg","uploads\/taingherz2.jpg","uploads\/taingherz3.jpg","uploads\/taingherz4.jpg"]',
            'describe' => '
            <p><span>&nbsp;<img src="/media/lib/44204_nr1.png" alt="" width="100%" height="100%"></span></p>
            <p><span>Razer Nari là những chiếc tai nghe chơi game không dây sắp được ra mắt tại Việt Nam. Hứa hẹn đem tới những sự lựa chọn tốt cho nhu cầu Wireless Gaming cùng những góc chơi game tối đa sự gọn gàng. Có 3 phiên bản Razer Nari được đưa tới các game thủ, Nari Essential, Nari và Nari Ultimate</span></p>
            ',
            'tech_info' => '<ul>
                            <li>THương hiệu: Razor</li>
                            <li>Tên sản phẩm:  Nari Ultimate </li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 4399000,
            'quantity' => 40
        ]);
        DB::table('products')->insert([
            'name' => 'Chuột chơi game SteelSeries Rival 710',
            'thumbnail' => 'uploads/chuotss.jpg',
            'brand_code' => 'ss',
            'category_code' => 'ch',
            'image_url' => '["uploads\/chuotss1.jpg","uploads\/chuotss2.jpg","uploads\/chuotss3.jpg","uploads\/chuotss4.jpg"]',
            'describe' => '
            <p><img src="/media/lib/45217_2ce9d188-8b75-4981-b649-e474c4f5d0f2._CR0038801200_PT0_SX970__.jpg" alt=""></p>
            ',
            'tech_info' => '<ul>
                            <li>THương hiệu: Steelseries</li>
                            <li>Tên sản phẩm:  Rival  </li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 2149000,
            'quantity' => 4
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn phím SteelSeries APEX 3 RGB Water Resistant Whisper-Quiet Switches Gaming Black',
            'thumbnail' => 'uploads/phimss.jpg',
            'brand_code' => 'ss',
            'category_code' => 'bp',
            'image_url' => '["uploads\/phimss1.jpg","uploads\/phimss2.jpg","uploads\/phimss3.jpg","uploads\/phimss4.jpg"]',
            'describe' => 'Đang cập nhật...',
            'tech_info' => '<ul>
                            <li>THương hiệu: Steelseries</li>
                            <li>Tên sản phẩm:    </li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 1649000,
            'quantity' => 40
        ]);
        DB::table('products')->insert([
            'name' => 'Tai nghe Bluetooth SteelSeries Arctis 3 61509 - Phiên bản 2019',
            'thumbnail' => 'uploads/tainghess.jpg',
            'brand_code' => 'ss',
            'category_code' => 'tn',
            'image_url' => '["uploads\/tainghess1.jpg","uploads\/tainghess2.jpg","uploads\/tainghess3.jpg","uploads\/tainghess4.jpg"]',
            'describe' => 'Đang cập nhật...',
            'tech_info' => '<ul>
                            <li>THương hiệu: Steelseries</li>
                            <li>Tên sản phẩm:  Arctis </li>
                            <li>Màu sắc: Đen</li></ul>',
            'price' => 2799000,
            'quantity' => 40
        ]);

    }
}
