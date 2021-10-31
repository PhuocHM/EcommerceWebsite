<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new User;
        $item->id = 1;
        $item->name = "Phuoc";
        $item->email = "phuoc@gmail.com";
        $item->password = "1";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new User;
        $item->id = 2;
        $item->name = "Phu";
        $item->email = "phu@gmail.com";
        $item->password = "1";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new User;
        $item->id = 3;
        $item->name = "Thanh";
        $item->email = "thanh@gmail.com";
        $item->password = "1";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new User;
        $item->id = 4;
        $item->name = "Khang";
        $item->email = "khang@gmail.com";
        $item->password = "1";
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
