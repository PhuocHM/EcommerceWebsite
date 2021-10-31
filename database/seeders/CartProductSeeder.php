<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\CartItems;

class CartProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new CartItems;
        $item->id = 1;
        $item->product_id = 1;
        $item->quantity = 1;
        $item->cart_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 2;
        $item->product_id = 2;
        $item->quantity = 1;
        $item->cart_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 3;
        $item->product_id = 3;
        $item->quantity = 1;
        $item->cart_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 4;
        $item->product_id = 4;
        $item->quantity = 1;
        $item->cart_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
