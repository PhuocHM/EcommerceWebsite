<?php

namespace Database\Seeders;

use App\Models\Admin\Roles;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Roles;
        $item->id = 1;
        $item->name = "product-show";
        $item->slug = "product-show";
        $item->info = "product-show";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at = "2021-09-25 23:19:08";
        $item->save();

        $item = new Roles;
        $item->id = 2;
        $item->name = "discount-show";
        $item->slug = "discount-show";
        $item->info = "discount-show";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at = "2021-09-25 23:19:08";
        $item->save();

        $item = new Roles;
        $item->id = 3;
        $item->name = "order-show";
        $item->slug = "order-show";
        $item->info = "order-show";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at = "2021-09-25 23:19:08";
        $item->save();

        $item = new Roles;
        $item->id = 4;
        $item->name = "employee-show";
        $item->slug = "employee-show";
        $item->info = "employee-show";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at = "2021-09-25 23:19:08";
        $item->save();

        $item = new Roles;
        $item->id = 5;
        $item->name = "customer-show";
        $item->slug = "customer-show";
        $item->info = "customer-show";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at = "2021-09-25 23:19:08";
        $item->save();
    }
}
