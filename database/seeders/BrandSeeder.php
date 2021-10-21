<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Brands;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Brands;
        $item->id = 1;
        $item->name = "LG";
        $item->slug = "lg";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 2;
        $item->name = "Daikin";
        $item->slug = "daikin";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 3;
        $item->name = "Mitsubisi";
        $item->slug = "mitsubisi";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 4;
        $item->name = "Panasonic";
        $item->slug = "panasonic";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 5;
        $item->name = "Toshiba";
        $item->slug = "toshiba";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 6;
        $item->name = "Samsung";
        $item->slug = "samsung";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 7;
        $item->name = "Apple";
        $item->slug = "Apple";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 8;
        $item->name = "Hitachi";
        $item->slug = "hitachi";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 9;
        $item->name = "Aqua";
        $item->slug = "aqua";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Brands;
        $item->id = 10;
        $item->name = "Inverter";
        $item->slug = "inverter";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
