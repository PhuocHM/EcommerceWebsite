<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\Attributes;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Attributes;
        $item->id = 1;
        $item->title = "Tạo project";
        $item->content = "Tạo project Laravel";
        $item->due_date = "2018-09-26";
        $item->image  = "";
        $item->save();
    }
}
