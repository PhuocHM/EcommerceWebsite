<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Carts;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Carts;
        $item->id = 1;
        $item->code = "C1";
        $item->user_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Carts;
        $item->id = 2;
        $item->code = "C2";
        $item->user_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
