<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Attributes;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Attributes;
        $item->id = 1;
        $item->name = "Công suất";
        $item->slug = "cong-suat";
        $item->category_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 2;
        $item->name = "Điện áp";
        $item->slug = "dien-ap";
        $item->category_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 3;
        $item->name = "Chức năng";
        $item->slug = "chuc-nang";
        $item->category_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 4;
        $item->name = "CPU";
        $item->slug = "cpu";
        $item->category_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 5;
        $item->name = "Màn hình";
        $item->slug = "man-hinh";
        $item->category_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 6;
        $item->name = "RAM";
        $item->slug = "ram";
        $item->category_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 7;
        $item->name = "Đồ họa";
        $item->slug = "do-hoa";
        $item->category_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 8;
        $item->name = "Lưu trữ";
        $item->slug = "luu-tru";
        $item->category_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 9;
        $item->name = "Hệ điều hành";
        $item->slug = "he-dieu-hanh";
        $item->category_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 10;
        $item->name = "Pin";
        $item->slug = "pin";
        $item->category_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 11;
        $item->name = "Kích thước";
        $item->slug = "kich-thuoc";
        $item->category_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 12;
        $item->name = "Độ phân giải";
        $item->slug = "do-phan-giai";
        $item->category_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 13;
        $item->name = "Hệ điều hành";
        $item->slug = "he-dieu-hanh";
        $item->category_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 14;
        $item->name = "Kết nối mạng";
        $item->slug = "ket-noi-mang";
        $item->category_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 15;
        $item->name = "Cổng xuất hình";
        $item->slug = "cong-xuat-hinh";
        $item->category_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 16;
        $item->name = "Màn hình";
        $item->slug = "man-hinh";
        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 17;
        $item->name = "Camera trước";
        $item->slug = "camera-truoc";
        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 18;
        $item->name = "Camera sau";
        $item->slug = "camera-sau";
        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 19;
        $item->name = "CPU";
        $item->slug = "cpu";
        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 20;
        $item->name = "Bộ nhớ";
        $item->slug = "bo-nho";
        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 21;
        $item->name = "RAM";
        $item->slug = "ram";
        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 22;
        $item->name = "Hệ điều hành";
        $item->slug = "he-dieu-hanh";
        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 23;
        $item->name = "CPU";
        $item->slug = "cpu";
        $item->category_id = 5;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 24;
        $item->name = "RAM";
        $item->slug = "ram";
        $item->category_id = 5;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 25;
        $item->name = "Đồ họa";
        $item->slug = "do-hoa";
        $item->category_id = 5;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 26;
        $item->name = "Lưu trữ";
        $item->slug = "luu-tru";
        $item->category_id = 5;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 27;
        $item->name = "Kết nối";
        $item->slug = "ket-noi";
        $item->category_id = 5;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 28;
        $item->name = "Công suất";
        $item->slug = "cong-suat";
        $item->category_id = 6;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Attributes;
        $item->id = 29;
        $item->name = "Quạt";
        $item->slug = "quat";
        $item->category_id = 6;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
