<?php

namespace Database\Seeders;

use App\Models\Users\DiscountProduct;
use Illuminate\Database\Seeder;

class DiscountProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new DiscountProduct;
        $item->id = 1;
        $item->discount_id = 1;
        $item->product_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new DiscountProduct;
        $item->id = 2;
        $item->discount_id = 2;
        $item->product_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new DiscountProduct;
        $item->id = 3;
        $item->discount_id = 2;
        $item->product_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new DiscountProduct;
        $item->id = 4;
        $item->discount_id = 1;
        $item->product_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
