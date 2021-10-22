<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Coupon;
        $item->id = 1;
        $item->code = "C0055";
        $item->type = "Cash";
        $item->amounts = 50000;
        $item->expired_day = '2021-10-19';
        $item->description = '1 hôm duy nhất 1 hôm duy nhất';
        $item->image = 'images/product/laptop.jpg';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Coupon;
        $item->id = 2;
        $item->code = "C123";
        $item->type = "Percent";
        $item->amounts = 50;
        $item->expired_day = '2021-10-19';
        $item->description = '1 hôm duy nhất 1 hôm duy nhất';
        $item->image = 'images/product/tulanh1.jpg';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
