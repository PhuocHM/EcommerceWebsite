<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Categories;
        $item->id = 1;
        $item->name = "Điện máy - Điện gia dụng";
        $item->slug = "dien-may-dien-gia-dung";
        $item->description = "Đây là điện máy";
        $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 2;
        $item->name = "Laptop & Macbook";
        $item->slug = "laptop-macbook";
        $item->description = "Đây là Laptop - Macbook";
        $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 3;
        $item->name = "Tivi & Màn hình TV";
        $item->slug = "tivi-man-hinh-tivi";
        $item->description = "Đây là TV";
        $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 4;
        $item->name = "Điện thoại - Thiết bị thông minh";
        $item->slug = "dien-thoai-thiet-bi-thong-minh";
        $item->description = "Đây là điện thoại";
        $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 5;
        $item->name = "PC & Máy tính đồng bộ";
        $item->slug = "PC-may-tinh-dong-bo";
        $item->description = "Đây là PC";
        $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 6;
        $item->name = "Linh kiện máy tính";
        $item->slug = "linh-kien-may-tinh";
        $item->description = "Đây là linh kiện máy tính";
        $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 7;
        $item->name = "Máy lọc khí ";
        $item->slug = "dieu-hoa-may-lanh";
        $item->description = "Đây là điều hòa";
        $item->parent_id = 1;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 8;
        $item->name = "Tủ lạnh";
        $item->slug = "tủ-lanh";
        $item->description = "Đây là tủ lạnh";
        $item->parent_id = 1;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 9;
        $item->name = "Máy giặt";
        $item->slug = "may-giat";
        $item->description = "Đây là máy giặt";
        $item->parent_id = 1;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 10;
        $item->name = "Máy nước nóng";
        $item->slug = "may-nuoc-nong";
        $item->description = "Đây là máy nước nóng";
        $item->parent_id = 1;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 11;
        $item->name = "Laptop Window";
        $item->slug = "laptop-window";
        $item->description = "Đây là điều hòa";
        $item->parent_id = 2;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 12;
        $item->name = "Macbook";
        $item->slug = "macbook";
        $item->description = "Đây là điều hòa";
        $item->parent_id = 2;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 13;
        $item->name = "Laptop theo kích thước";
        $item->slug = "laptop-theo-kich-thuoc";
        $item->description = "Đây là điều hòa";
        $item->parent_id = 2;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 14;
        $item->name = "Laptop theo cấu hình";
        $item->slug = "laptop-theo-cau-hinh";
        $item->description = "Đây là cấu hình";
        $item->parent_id = 2;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 15;
        $item->name = "Tivi theo thương hiệu";
        $item->slug = "tivi-theo-thuong-hieu";
        $item->description = "Đây là TV";
        $item->parent_id = 3;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 16;
        $item->name = "TV theo tính năng";
        $item->slug = "tivi-theo-tinh-nang";
        $item->description = "Đây là TV tính năng";
        $item->parent_id = 3;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 17;
        $item->name = "TV theo kích thước";
        $item->slug = "tivi-theo-kich-thuoc";
        $item->description = "Đây là TV tính năng";
        $item->parent_id = 3;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 18;
        $item->name = "TV theo giá";
        $item->slug = "tivi-theo-giá";
        $item->description = "Đây là TV tính năng";
        $item->parent_id = 3;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 19;
        $item->name = "Điện thoại";
        $item->slug = "dien-thoai";
        $item->description = "Đây là TV tính năng";
        $item->parent_id = 4;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 20;
        $item->name = "Máy tính bảng";
        $item->slug = "may-tinh-bang";
        $item->description = "Đây là TV tính năng";
        $item->parent_id = 4;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 21;
        $item->name = "Phụ kiện";
        $item->slug = "phu-kien";
        $item->description = "Đây là TV tính năng";
        $item->parent_id = 4;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 22;
        $item->name = "PC theo thương hiệu";
        $item->slug = "PC-theo-thuong-hieu";
        $item->description = "Đây là TV tính năng";
        $item->parent_id = 5;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Categories;
        $item->id = 23;
        $item->name = "VGA - Card màn hình";
        $item->slug = "vga-card-man-hinh";
        $item->description = "Đây là TV tính năng";
        $item->parent_id = 6;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
