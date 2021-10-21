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
        $item->name = "LG";
        $item->slug = "lg";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
