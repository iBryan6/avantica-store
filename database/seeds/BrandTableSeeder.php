<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = new Brand();
        $brand->name = 'PIL';
        $brand->save();

        $brand = new Brand();
        $brand->name = 'Santa Clara';
        $brand->save();

        $brand = new Brand();
        $brand->name = 'Apple';
        $brand->save();

        $brand = new Brand();
        $brand->name = 'Samsung';
        $brand->save();

        $brand = new Brand();
        $brand->name = 'Microsoft';
        $brand->save();

        $brand = new Brand();
        $brand->name = 'Sony';
        $brand->save();
    }
}
