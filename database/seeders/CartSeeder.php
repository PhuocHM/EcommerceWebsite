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

        $item = new Carts;
        $item->id = 3;
        $item->code = "C3";
        $item->user_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Carts;
        $item->id = 4;
        $item->code = "C4";
        $item->user_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Carts;
        $item->id = 5;
        $item->code = "C4";
        $item->user_id = 1;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Carts;
        $item->id = 6;
        $item->code = "C4";
        $item->user_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Carts;
        $item->id = 7;
        $item->code = "C4";
        $item->user_id = 3;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Carts;
        $item->id = 8;
        $item->code = "C4";
        $item->user_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Carts;
        $item->id = 9;
        $item->code = "C4";
        $item->user_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Carts;
        $item->id = 10;
        $item->code = "C4";
        $item->user_id = 2;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
