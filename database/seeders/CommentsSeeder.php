<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Comments;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Comments;
        $item->id = 1;
        $item->user_id = 1;
        $item->product_id = 1;
        $item->content = 'Hay';
        $item->star_value = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Comments;
        $item->id = 2;
        $item->user_id = 2;
        $item->product_id = 2;
        $item->content = 'Hay';
        $item->star_value = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Comments;
        $item->id = 3;
        $item->user_id = 3;
        $item->product_id = 3;
        $item->content = 'Hay';
        $item->star_value = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Comments;
        $item->id = 4;
        $item->user_id = 4;
        $item->product_id = 4;
        $item->content = 'Hay';
        $item->star_value = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Comments;
        $item->id = 5;
        $item->user_id = 1;
        $item->product_id = 5;
        $item->content = 'Hay';
        $item->star_value = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Comments;
        $item->id = 6;
        $item->user_id = 2;
        $item->product_id = 2;
        $item->content = 'Hay';
        $item->star_value = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
