<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Customers;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Customers;
        $item->id = 1;
        $item->name = "Phuoc";
        $item->slug = "Phuoc";
        $item->phone = "012345667789";
        $item->address = "Ly Thuong Kiet";
        $item->bonus_points = 0;
        $item->user_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Customers;
        $item->id = 2;
        $item->name = "Phu";
        $item->slug = "Phu";
        $item->phone = "012345667789";
        $item->address = "Ly Thuong Kiet";
        $item->bonus_points = 0;
        $item->user_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Customers;
        $item->id = 3;
        $item->name = "Thanh";
        $item->slug = "Thanh";
        $item->phone = "012345667789";
        $item->address = "Ly Thuong Kiet";
        $item->bonus_points = 0;
        $item->user_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Customers;
        $item->id = 4;
        $item->name = "Khang";
        $item->slug = "Khang";
        $item->phone = "012345667789";
        $item->address = "Ly Thuong Kiet";
        $item->bonus_points = 0;
        $item->user_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
