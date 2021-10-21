<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\ProductsImages;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new ProductsImages;
        $item->id = 1;
        $item->product_id = 1;
        $item->image = "images/product/tulanh1.jpg";
        $item->type = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductsImages;
        $item->id = 2;
        $item->product_id = 2;
        $item->image = "images/product/laptop.jpg";
        $item->type = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductsImages;
        $item->id = 3;
        $item->product_id = 3;
        $item->image = "images/product/tivi.jpg";
        $item->type = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductsImages;
        $item->id = 4;
        $item->product_id = 4;
        $item->image = "images/product/iphone.jpg";
        $item->type = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductsImages;
        $item->id = 5;
        $item->product_id = 5;
        $item->image = "images/product/pc.jpg";
        $item->type = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductsImages;
        $item->id = 6;
        $item->product_id = 6;
        $item->image = "images/product/ram.jpg";
        $item->type = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
