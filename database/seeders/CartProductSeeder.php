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
        $item->cart_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 4;
        $item->product_id = 4;
        $item->quantity = 1;
        $item->cart_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 5;
        $item->product_id = 5;
        $item->quantity = 1;
        $item->cart_id = 5;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 6;
        $item->product_id = 2;
        $item->quantity = 1;
        $item->cart_id = 6;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 7;
        $item->product_id = 1;
        $item->quantity = 1;
        $item->cart_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 8;
        $item->product_id = 4;
        $item->quantity = 1;
        $item->cart_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 9;
        $item->product_id = 3;
        $item->quantity = 1;
        $item->cart_id = 9;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new CartItems;
        $item->id = 10;
        $item->product_id = 2;
        $item->quantity = 1;
        $item->cart_id = 10;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
