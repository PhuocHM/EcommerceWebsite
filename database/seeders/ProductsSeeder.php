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
        $item->category_id = 8;
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
        $item->category_id = 11;
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
        $item->category_id = 15;
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
        $item->code = "C07";
        $item->name = "Máy Hút Bụi (VACUUM) XIAOMI MI";
        $item->slug = "may-hut-bui-vacum";
        $item->sold = 0;
        $item->price = 179000;
        $item->description = "Máy Hút Bụi (VACUUM) XIAOMI MI";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 8;
        $item->code = "C08";
        $item->name = "Bàn Chải Đánh Răng ELECTRIC TOOTHBRUSH";
        $item->slug = "ban-chai-danh-rang";
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
        $item->code = "C09";
        $item->name = "Máy lọc không khí (AIR PURIFIER) XIAOMI MI";
        $item->slug = "may-loc-khong-khi";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy lọc không khí (AIR PURIFIER) XIAOMI MI";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 10;
        $item->code = "C10";
        $item->name = "Máy lọc không khí Air Shot OMNI APOT/AP01";
        $item->slug = "may-loc-khong-khi-air-shot";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy lọc không khí (AIR PURIFIER) XIAOMI MI";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 11;
        $item->code = "C11";
        $item->name = "Máy lọc không khí Daikin MC30VVM-A";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy lọc không khí Daikin MC30VVM-A";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 12;
        $item->code = "C11";
        $item->name = "Tủ lạnh Electrolux 85 lít EUM0900SA";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh Electrolux 85 lít EUM0900SA";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 13;
        $item->code = "C11";
        $item->name = "Tủ lạnh Samsung Inverter 327 lít";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh Samsung Inverter 327 lít";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 14;
        $item->code = "C11";
        $item->name = "Tủ lạnh LG Inverter 613 lít GR-B247JDS";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh LG Inverter 613 lít GR-B247JDS";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 15;
        $item->code = "C11";
        $item->name = "Tủ lạnh Aqua Inverter 249 lít AQR-IG248EN";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh Aqua Inverter 249 lít AQR-IG248EN";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 16;
        $item->code = "C11";
        $item->name = "Tủ lạnh Aqua Inverter 516 lít AQR-IG525AM (GB)";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh Aqua Inverter 516 lít AQR-IG525AM (GB)";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 17;
        $item->code = "C11";
        $item->name = "Tủ lạnh Aqua Inverter 350 lít AQR-IW378EB (SW)";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh Aqua Inverter 350 lít AQR-IW378EB (SW)";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 18;
        $item->code = "C11";
        $item->name = "Tủ lạnh Aqua Inverter 350 lít AQR-IW378EB (BS)";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh Aqua Inverter 350 lít AQR-IW378EB (BS)";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 19;
        $item->code = "C11";
        $item->name = "Tủ lạnh LG Inverter 393 lít GN-M422PS";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh LG Inverter 393 lít GN-M422PS";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 20;
        $item->code = "C11";
        $item->name = "Tủ lạnh LG Inverter 601 lít GR-D247JDS";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Tủ lạnh LG Inverter 601 lít GR-D247JDS";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 21;
        $item->code = "C12";
        $item->name = "Máy giặt Toshiba 7 kg AW-A800SV";
        $item->slug = "may-giat-toshiba";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy giặt Toshiba 7 kg AW-A800SV";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 22;
        $item->code = "C13";
        $item->name = "Máy giặt Electrolux Inverter 8 kg EWF8024BDWA";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy giặt Electrolux Inverter 8 kg EWF8024BDWA";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 23;
        $item->code = "C14";
        $item->name = "Máy giặt Electrolux Inverter 8 kg EWF8024ADSA";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy giặt Electrolux Inverter 8 kg EWF8024ADSA";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 24;
        $item->code = "C15";
        $item->name = "Máy giặt Electrolux Inverter 9 kg EWF9023BDWA";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy giặt Electrolux Inverter 9 kg EWF9023BDWA";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 25;
        $item->code = "C16";
        $item->name = "Máy giặt Electrolux Inverter 9 kg EWF9024BDWB";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy giặt Electrolux Inverter 9 kg EWF9024BDWB";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 26;
        $item->code = "C17";
        $item->name = "Máy giặt Electrolux Inverter 9 kg EWF9024BDWA";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy giặt Electrolux Inverter 9 kg EWF9024BDWA";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 27;
        $item->code = "C18";
        $item->name = "Máy giặt Electrolux Inverter 9 kg EWF9024ADSA";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy giặt Electrolux Inverter 9 kg EWF9024ADSA";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 28;
        $item->code = "C19";
        $item->name = "Máy giặt Electrolux Inverter 10 kg EWF1023BEWA";
        $item->slug = "may-loc-khong-khi-daikin";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy giặt Electrolux Inverter 10 kg EWF1023BEWA";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        // Máy nước nóng

        $item = new Products;
        $item->id = 29;
        $item->code = "C20";
        $item->name = "Máy nước nóng Ariston ST45PE-VN";
        $item->slug = "may-nuoc-nong-arison";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy nước nóng Ariston ST45PE-VN";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 10;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 30;
        $item->code = "C21";
        $item->name = "Máy nước nóng Ariston RT45E-VN";
        $item->slug = "may-nuoc-nong-arison-v2";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy nước nóng Ariston RT45E-VN";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 10;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 31;
        $item->code = "C22";
        $item->name = "Máy nước nóng Ariston RT45PE-VN";
        $item->slug = "may-nuoc-nong-arison-v3";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy nước nóng Ariston RT45PE-VN";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 10;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 32;
        $item->code = "C23";
        $item->name = "Máy nước nóng Ariston SMC45PE-VN-LE";
        $item->slug = "may-nuoc-nong-arison-v4";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy nước nóng Ariston SMC45PE-VN-LE";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 10;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 33;
        $item->code = "C24";
        $item->name = "Máy nước nóng Ariston SMC45E-VN";
        $item->slug = "may-nuoc-nong-arison-v5";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy nước nóng Ariston SMC45E-VN";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 10;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 34;
        $item->code = "C25";
        $item->name = "MMáy nước nóng Ariston RMC45E SBS-VN";
        $item->slug = "may-nuoc-nong-arison-v7";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy nước nóng Ariston RMC45E SBS-VN";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 10;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 35;
        $item->code = "C26";
        $item->name = "Máy nước nóng Ariston RMC45PE SBS-VN";
        $item->slug = "may-nuoc-nong-arison-v8";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy nước nóng Ariston RMC45PE SBS-VN";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 10;
        $item->created_at = "2021-10-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 36;
        $item->code = "C27";
        $item->name = "Máy lọc không khí Panasonic F-PXL45A";
        $item->slug = "may-loc-khi-panasonic";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy nước nóng Ariston RMC45PE SBS-VN";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-10-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();


        $item = new Products;
        $item->id = 37;
        $item->code = "C28";
        $item->name = "Máy lọc không khí Panasonic F-PXJ30A";
        $item->slug = "may-nuoc-nong-arison-v8";
        $item->sold = 0;
        $item->price = 17900;
        $item->description = "Máy lọc không khí Panasonic F-PXJ30A";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 7;
        $item->created_at = "2021-10-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 38;
        $item->code = "C29";
        $item->name = "Samsung Galaxy S5";
        $item->slug = "may-nuoc-nong-arison-v8";
        $item->sold = 0;
        $item->price = 25000000;
        $item->description = "Samsung Galaxy S5";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 19;
        $item->created_at = "2021-11-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 39;
        $item->code = "C30";
        $item->name = "Sony M1CSN";
        $item->slug = "may-nuoc-nong-arison-v8";
        $item->sold = 0;
        $item->price = 1999900;
        $item->description = "Sony M1";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 19;
        $item->created_at = "2021-11-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Products;
        $item->id = 40;
        $item->code = "C31";
        $item->name = "Loa thông minh tích hợp AI";
        $item->slug = "may-nuoc-nong-arison-v8";
        $item->sold = 0;
        $item->price = 2000000;
        $item->description = "Loa thông minh tích hợp AI";
        $item->status = 0;
        $item->brand_id = 3;
        $item->category_id = 19;
        $item->created_at = "2021-11-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
