<?php

use Illuminate\Database\Seeder;

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
    }
}