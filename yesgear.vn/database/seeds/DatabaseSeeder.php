<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('categories')->insert([
            ['code' => 'tn', 'name' => 'tai nghe'],
            ['code' => 'bp', 'name' => 'bàn phím'],
            ['code' => 'ch', 'name' => 'chuột']
        ]);
        DB::table('brands')->insert([
            ['code' => 'rz', 'name' => 'razor'],
            ['code' => 'lt', 'name' => 'logitech'],
            ['code' => 'du', 'name' => 'dareu'],
            ['code' => 'as', 'name' => 'asus'],
            ['code' => 'cs', 'name' => 'corsair'],
            ['code' => 'ed', 'name' => 'e-dra'],
            ['code' => 'ss', 'name' => 'steelseries']
        ]);
        DB::table('products')->insert([
            'name' => 'Mouse Dareu LM115G Multi Color Wireless Black Panda',
            'thumbnail' => 'uploads/chuot.jpg',
            'brand_code' => 'du',
            'category_code' => 'ch',
            'image_url' => '["uploads\/chuot1.jpg","uploads\/chuot2.jpg","uploads\/chuot3.jpg","uploads\/chuot4.jpg"]',
            'describe' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium id optio recusandae, fugit cupiditate a eius soluta sed vel dolorem temporibus quidem quas sapiente tempore labore. Odio fugiat accusantium illo nemo minus magni, architecto enim natus excepturi hic quibusdam voluptatibus. Asperiores ratione beatae placeat corrupti illo rerum ipsam, ullam consequatur.</p>',
            'tech_info' => "<div>
            <h2>Thông số kỹ thuật</h2>
          <div><table>
<tbody>
<tr>
<td colspan='2'>
<p>Mô tả chi tiết</p>
</td>
</tr>
<tr>
<td>
<p>Hãng sản xuất</p>
</td>
<td>Steelseries</td>
</tr>
<tr>
<td>
<p>Chủng loại</p>
</td>
<td>
<p>Tai nghe chơi game</p>
</td>
</tr>
<tr>
<td>
<p>Chuẩn cắm hỗ trợ</p>
</td>
<td>
<p>USB hoặc 3.5mm</p>
</td>
</tr>
<tr>
<td>
<p>Microphone</p>
</td>
<td>
<p>Có </p>
</td>
</tr>
<tr>
<td>
<p>Trở kháng</p>
</td>
<td>32 Ohm</td>
</tr>
<tr>
<td>
<p>Tần số</p>
</td>
<td>20-22000 Hz</td>
</tr>
<tr>
<td>
<p>Kích cỡ màng loa</p>
</td>
<td>
<p>40mm</p>
</td>
</tr>
<tr>
<td>
<p>Trọng lượng</p>
</td>
<td>N/a</td>
</tr>
<tr>
<td>Độ dài Cable</td>
<td>3.0m</td>
</tr>
</tbody>
</table></div>",
            'price' => 1390000,
            'quantity' => 300
        ]);
        DB::table('products')->insert([
            'name' => 'Chuột chơi game Razer DeathAdder Elite - Ergonomic (RZ01-02010100-R3A1)',
            'thumbnail' => 'uploads/chuot00.jpg',
            'brand_code' => 'rz',
            'category_code' => 'ch',
            'image_url' => '["uploads\/chuot01.jpg","uploads\/chuot02.jpg","uploads\/chuot03.jpg","uploads\/chuot04.jpg"]',
            'describe' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium id optio recusandae, fugit cupiditate a eius soluta sed vel dolorem temporibus quidem quas sapiente tempore labore. Odio fugiat accusantium illo nemo minus magni, architecto enim natus excepturi hic quibusdam voluptatibus. Asperiores ratione beatae placeat corrupti illo rerum ipsam, ullam consequatur.</p>',
            'tech_info' => "<div>
            <h2>Thông số kỹ thuật</h2>
          <div><table>
<tbody>
<tr>
<td colspan='2'>
<p>Mô tả chi tiết</p>
</td>
</tr>
<tr>
<td>
<p>Hãng sản xuất</p>
</td>
<td>Steelseries</td>
</tr>
<tr>
<td>
<p>Chủng loại</p>
</td>
<td>
<p>Tai nghe chơi game</p>
</td>
</tr>
<tr>
<td>
<p>Chuẩn cắm hỗ trợ</p>
</td>
<td>
<p>USB hoặc 3.5mm</p>
</td>
</tr>
<tr>
<td>
<p>Microphone</p>
</td>
<td>
<p>Có </p>
</td>
</tr>
<tr>
<td>
<p>Trở kháng</p>
</td>
<td>32 Ohm</td>
</tr>
<tr>
<td>
<p>Tần số</p>
</td>
<td>20-22000 Hz</td>
</tr>
<tr>
<td>
<p>Kích cỡ màng loa</p>
</td>
<td>
<p>40mm</p>
</td>
</tr>
<tr>
<td>
<p>Trọng lượng</p>
</td>
<td>N/a</td>
</tr>
<tr>
<td>Độ dài Cable</td>
<td>3.0m</td>
</tr>
</tbody>
</table></div>",
            'price' => 2590000,
            'quantity' => 300
        ]);
        DB::table('products')->insert([
            'name' => 'Chuột chơi game Logitech G402 USB Black',
            'thumbnail' => 'uploads/chuot10.jpg',
            'brand_code' => 'lt',
            'category_code' => 'ch',
            'image_url' => '["uploads\/chuot11.jpg","uploads\/chuot12.jpg","uploads\/chuot13.jpg","uploads\/chuot4.jpg"]',
            'describe' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium id optio recusandae, fugit cupiditate a eius soluta sed vel dolorem temporibus quidem quas sapiente tempore labore. Odio fugiat accusantium illo nemo minus magni, architecto enim natus excepturi hic quibusdam voluptatibus. Asperiores ratione beatae placeat corrupti illo rerum ipsam, ullam consequatur.</p>',
            'tech_info' => "<div>
            <h2>Thông số kỹ thuật</h2>
          <div><table>
<tbody>
<tr>
<td colspan='2'>
<p>Mô tả chi tiết</p>
</td>
</tr>
<tr>
<td>
<p>Hãng sản xuất</p>
</td>
<td>Steelseries</td>
</tr>
<tr>
<td>
<p>Chủng loại</p>
</td>
<td>
<p>Tai nghe chơi game</p>
</td>
</tr>
<tr>
<td>
<p>Chuẩn cắm hỗ trợ</p>
</td>
<td>
<p>USB hoặc 3.5mm</p>
</td>
</tr>
<tr>
<td>
<p>Microphone</p>
</td>
<td>
<p>Có </p>
</td>
</tr>
<tr>
<td>
<p>Trở kháng</p>
</td>
<td>32 Ohm</td>
</tr>
<tr>
<td>
<p>Tần số</p>
</td>
<td>20-22000 Hz</td>
</tr>
<tr>
<td>
<p>Kích cỡ màng loa</p>
</td>
<td>
<p>40mm</p>
</td>
</tr>
<tr>
<td>
<p>Trọng lượng</p>
</td>
<td>N/a</td>
</tr>
<tr>
<td>Độ dài Cable</td>
<td>3.0m</td>
</tr>
</tbody>
</table></div>",
            'price' => 1320000,
            'quantity' => 4
        ]);
        DB::table('products')->insert([
            'name' => 'Bàn phím cơ Corsair K63 Compact Mechanical Cherry MX Red (CH-9115020-NA',
            'thumbnail' => 'uploads/phim00.jpg',
            'brand_code' => 'cs',
            'category_code' => 'bp',
            'image_url' => '["uploads\/phim01.jpg","uploads\/phim02.jpg","uploads\/phim03.jpg","uploads\/phim04.jpg"]',
            'describe' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium id optio recusandae, fugit cupiditate a eius soluta sed vel dolorem temporibus quidem quas sapiente tempore labore. Odio fugiat accusantium illo nemo minus magni, architecto enim natus excepturi hic quibusdam voluptatibus. Asperiores ratione beatae placeat corrupti illo rerum ipsam, ullam consequatur.</p>',
            'tech_info' => "<div>
            <h2>Thông số kỹ thuật</h2>
          <div><table>
<tbody>
<tr>
<td colspan='2'>
<p>Mô tả chi tiết</p>
</td>
</tr>
<tr>
<td>
<p>Hãng sản xuất</p>
</td>
<td>Steelseries</td>
</tr>
<tr>
<td>
<p>Chủng loại</p>
</td>
<td>
<p>Tai nghe chơi game</p>
</td>
</tr>
<tr>
<td>
<p>Chuẩn cắm hỗ trợ</p>
</td>
<td>
<p>USB hoặc 3.5mm</p>
</td>
</tr>
<tr>
<td>
<p>Microphone</p>
</td>
<td>
<p>Có </p>
</td>
</tr>
<tr>
<td>
<p>Trở kháng</p>
</td>
<td>32 Ohm</td>
</tr>
<tr>
<td>
<p>Tần số</p>
</td>
<td>20-22000 Hz</td>
</tr>
<tr>
<td>
<p>Kích cỡ màng loa</p>
</td>
<td>
<p>40mm</p>
</td>
</tr>
<tr>
<td>
<p>Trọng lượng</p>
</td>
<td>N/a</td>
</tr>
<tr>
<td>Độ dài Cable</td>
<td>3.0m</td>
</tr>
</tbody>
</table></div>",
            'price' => 1990000,
            'quantity' => 10
        ]);
        DB::table('products')->insert([
            'name' => 'Tai nghe SteelSeries Arctis 5 2019 Black 61504',
            'thumbnail' => 'uploads/tainghe00.jpg',
            'brand_code' => 'ss',
            'category_code' => 'tn',
            'image_url' => '["uploads\/tainghe01.jpg","uploads\/tainghe02.jpg","uploads\/tainghe03.jpg","uploads\/tainghe04.jpg"]',
            'describe' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium id optio recusandae, fugit cupiditate a eius soluta sed vel dolorem temporibus quidem quas sapiente tempore labore. Odio fugiat accusantium illo nemo minus magni, architecto enim natus excepturi hic quibusdam voluptatibus. Asperiores ratione beatae placeat corrupti illo rerum ipsam, ullam consequatur.</p>',
            'tech_info' => "<div>
            <h2>Thông số kỹ thuật</h2>
          <div><table>
<tbody>
<tr>
<td colspan='2'>
<p>Mô tả chi tiết</p>
</td>
</tr>
<tr>
<td>
<p>Hãng sản xuất</p>
</td>
<td>Steelseries</td>
</tr>
<tr>
<td>
<p>Chủng loại</p>
</td>
<td>
<p>Tai nghe chơi game</p>
</td>
</tr>
<tr>
<td>
<p>Chuẩn cắm hỗ trợ</p>
</td>
<td>
<p>USB hoặc 3.5mm</p>
</td>
</tr>
<tr>
<td>
<p>Microphone</p>
</td>
<td>
<p>Có </p>
</td>
</tr>
<tr>
<td>
<p>Trở kháng</p>
</td>
<td>32 Ohm</td>
</tr>
<tr>
<td>
<p>Tần số</p>
</td>
<td>20-22000 Hz</td>
</tr>
<tr>
<td>
<p>Kích cỡ màng loa</p>
</td>
<td>
<p>40mm</p>
</td>
</tr>
<tr>
<td>
<p>Trọng lượng</p>
</td>
<td>N/a</td>
</tr>
<tr>
<td>Độ dài Cable</td>
<td>3.0m</td>
</tr>
</tbody>
</table></div>",
            'price' => 2199000,
            'quantity' => 300
        ]);
    }
}
