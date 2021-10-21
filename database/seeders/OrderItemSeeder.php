<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\OrderItems;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new OrderItems;
        $item->id = 1;
        $item->product_id = 1;
        $item->price = 20000;
        $item->quantity = 2;
        $item->order_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new OrderItems;
        $item->id = 2;
        $item->product_id = 1;
        $item->price = 20000;
        $item->quantity = 1;
        $item->order_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new OrderItems;
        $item->id = 3;
        $item->product_id = 2;
        $item->price = 20000;
        $item->quantity = 2;
        $item->order_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new OrderItems;
        $item->id = 4;
        $item->product_id = 5;
        $item->price = 25000;
        $item->quantity = 1;
        $item->order_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
