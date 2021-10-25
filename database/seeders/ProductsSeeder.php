<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Products;
        $item->id = 1;
        $item->code = "C01";
        $item->name = "Tủ lạnh LG Inverter 613 lít GR-B247JDS";
        $item->slug = "tu-lanh-lg-inverter";
        // $item->tag = "Tủ lạnh";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "Ngăn chứa rau củ quả của Tủ lạnh LG Inverter 613 lít GR-B247JDS có diện tích rộng rãi giúp mang lại không gian dự trữ đồ lên đến 28 lít. ";
        $item->status = 0;
        $item->brand_id = 1;
        $item->category_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 2;
        $item->code = "C02";
        $item->name = "Laptop LG Gram 2021";
        $item->slug = "laptop-lg-gram-2021";
        // $item->tag = "Laptop";
        $item->sold = 0;
        $item->price = 394900;
        $item->description = "Máy tính xách tay LG Gram 2021 16ZD90P-G.AX54A5 sở hữu màn hình với độ phân giải đỉnh cao.";
        $item->status = 0;
        $item->brand_id = 1;
        $item->category_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 3;
        $item->code = "C03";
        $item->name = "Smart Tivi Samsung 4K 43 inch";
        $item->slug = "smart-tivi-samsung";
        // $item->tag = "Tivi";
        $item->sold = 0;
        $item->price = 99000;
        $item->description = "Smart Tivi Samsung 4K 43 inch UA43NU7100 là dòng sản phẩm chất lượng cao của samsung ra mắt không phụ lòng người dùng.";
        $item->status = 0;
        $item->brand_id = 6;
        $item->category_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 4;
        $item->code = "C04";
        $item->name = "Điện Thoại Di Động iPhone 11 64GB ";
        $item->slug = "dien-thoai-apple-11";
        // $item->tag = "Tivi";
        $item->sold = 0;
        $item->price = 99000;
        $item->description = "Apple chính thức ra mắt Điện Thoại Di Động iPhone 11 64GB Purple vào ngày 11/9 với nhiều điểm nhấn đến từ thiết kế. Có rất";
        $item->status = 0;
        $item->brand_id = 7;
        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 5;
        $item->code = "C05";
        $item->name = "PC HP 22-b201d AIO (Z8F51AA)  ";
        $item->slug = "pc-hp";
        // $item->tag = "PC";
        $item->sold = 0;
        $item->price = 69930;
        $item->description = "N/A";
        $item->status = 0;
        $item->brand_id = 7;
        $item->category_id = 5;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 6;
        $item->code = "C06";
        $item->name = "RAM desktop Apacer Panther Golden";
        $item->slug = "ram-pc";
        // $item->tag = "RAM";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Bộ nhớ DDR4 Apacer 8GB (2400) Panther Golden Heatsink (EK.08G2T.GEC)";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 6;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 7;
        $item->code = "C06";
        $item->name = "RAM desktop Apacer Panther Golden";
        $item->slug = "ram-pc";
        // $item->tag = "RAM";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Bộ nhớ DDR4 Apacer 8GB (2400) Panther Golden Heatsink (EK.08G2T.GEC)";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 8;
        $item->code = "C06";
        $item->name = "RAM Panther Golden";
        $item->slug = "ram-pc";
        // $item->tag = "RAM";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Bộ nhớ DDR4 Apacer 8GB (2400) Panther Golden Heatsink (EK.08G2T.GEC)";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 9;
        $item->code = "C06";
        $item->name = "desktop Apacer Panther Golden";
        $item->slug = "ram-pc";
        // $item->tag = "RAM";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Bộ nhớ DDR4 Apacer 8GB (2400) Panther Golden Heatsink (EK.08G2T.GEC)";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
