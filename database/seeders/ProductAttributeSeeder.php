<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users\ProductAttribute;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new ProductAttribute;
        $item->id = 1;
        $item->product_id = 7;
        $item->attribute_id = 1;
        $item->content = '70W';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 2;
        $item->product_id = 7;
        $item->attribute_id = 2;
        $item->content = '55W';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 3;
        $item->product_id = 7;
        $item->attribute_id = 3;
        $item->content = 'Li-ion';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 4;
        $item->product_id = 7;
        $item->attribute_id = 4;
        $item->content = 'Quét nhà & Hút bụi';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 5;
        $item->product_id = 7;
        $item->attribute_id = 5;
        $item->content = '10 tiếng';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 6;
        $item->product_id = 8;
        $item->attribute_id = 1;
        $item->content = '10W';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 7;
        $item->product_id = 8;
        $item->attribute_id = 2;
        $item->content = '10W';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 8;
        $item->product_id = 8;
        $item->attribute_id = 3;
        $item->content = 'Li-ion';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 9;
        $item->product_id = 8;
        $item->attribute_id = 4;
        $item->content = 'Đánh răng';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 10;
        $item->product_id = 8;
        $item->attribute_id = 5;
        $item->content = '20h';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 11;
        $item->product_id = 9;
        $item->attribute_id = 1;
        $item->content = '70W';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 12;
        $item->product_id = 9;
        $item->attribute_id = 2;
        $item->content = '50W';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 13;
        $item->product_id = 9;
        $item->attribute_id = 3;
        $item->content = 'Li-ion';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 14;
        $item->product_id = 9;
        $item->attribute_id = 4;
        $item->content = 'Quét nhà & Hút bụi';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 15;
        $item->product_id = 9;
        $item->attribute_id = 5;
        $item->content = '10 tiếng';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 16;
        $item->product_id = 10;
        $item->attribute_id = 1;
        $item->content = '70W';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 17;
        $item->product_id = 10;
        $item->attribute_id = 2;
        $item->content = '55W';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 18;
        $item->product_id = 10;
        $item->attribute_id = 3;
        $item->content = 'Li-ion';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 19;
        $item->product_id = 10;
        $item->attribute_id = 4;
        $item->content = 'Quét nhà & Hút bụi';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 20;
        $item->product_id = 10;
        $item->attribute_id = 5;
        $item->content = '6 tiếng';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 21;
        $item->product_id = 1;
        $item->attribute_id = 21;
        $item->content = '16 GB';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 22;
        $item->product_id = 1;
        $item->attribute_id = 22;
        $item->content = 'Android';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 23;
        $item->product_id = 1;
        $item->attribute_id = 23;
        $item->content = 'I7';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 24;
        $item->product_id = 1;
        $item->attribute_id = 24;
        $item->content = '16 GB';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 25;
        $item->product_id = 1;
        $item->attribute_id = 25;
        $item->content = 'RTX 3000 Series';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 26;
        $item->product_id = 2;
        $item->attribute_id = 1;
        $item->content = 'RTX 3070 Ti';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 27;
        $item->product_id = 2;
        $item->attribute_id = 2;
        $item->content = 'RTX 30890 Ti';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new ProductAttribute;
        $item->id = 28;
        $item->product_id = 2;
        $item->attribute_id = 3;
        $item->content = 'RTX 3099990 Ti';
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
