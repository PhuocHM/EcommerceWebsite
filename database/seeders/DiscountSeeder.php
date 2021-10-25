<?php

namespace Database\Seeders;

use App\Models\Users\Discounts;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Discounts;
        $item->id = 1;
        $item->amounts = 5000;
        $item->start_day = '2021-10-12';
        $item->expired_day = '2021-10-14';
        $item->description = 'Hello 123';
        $item->image = 'images/product/tulanh1.jpg';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Discounts;
        $item->id = 2;
        $item->amounts = 10000;
        $item->start_day = '2021-10-12';
        $item->expired_day = '2021-10-14';
        $item->description = 'Hello 123';
        $item->image = 'images/product/laptop.jpg';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
