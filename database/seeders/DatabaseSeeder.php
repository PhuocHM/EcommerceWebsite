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
        $this->call(BrandSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(ProductAttributesSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CartProductSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderItemSeeder::class);
    }
}
