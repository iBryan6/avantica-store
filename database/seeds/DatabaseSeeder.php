<?php

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
        $this->call(UserTypeTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderItemTableSeeder::class);
        $this->call(ProductImageTableSeeder::class);
        $this->call(BrandTableSeeder::class);


    }
}