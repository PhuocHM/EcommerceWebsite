<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoriesSeeder::class);
        $this->call(AttributesSeeder::class);
        $this->call(BrandsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(ProductAttributeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CartsSeeder::class);
        $this->call(CartProductSeeder::class);
        $this->call(CouponsSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrderItemsSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}
