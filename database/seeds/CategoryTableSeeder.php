<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Food';
        $category->save();

        $category = new Category();
        $category->name = 'Drink';
        $category->save();

        $category = new Category();
        $category->name = 'Electronics';
        $category->save();

        $category = new Category();
        $category->name = 'Cloths';
        $category->save();
    }
}
