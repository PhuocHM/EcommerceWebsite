<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Orders;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Orders;
        $item->id = 1;
        $item->code = "PHUOCDEPTRAIVL";
        $item->customer_id = 1;
        $item->payment_method = "Cash";
        $item->total_price = 10000;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Orders;
        $item->id = 2;
        $item->code = "PHUDEPTRAIVL";
        $item->customer_id = 2;
        $item->payment_method = "Cash";
        $item->total_price = 20000;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
