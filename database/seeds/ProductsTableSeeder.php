<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->code = "123456";
        $product->name = "Leche";
        $product->price = "$30";
        $product->description = "Hola esta es la leche";
        $product->id_category = 2;
        $product->id_type = 2;
        $product->id_brand = 2;
        $product->save();

        $product = new Product();
        $product->code = "321456";
        $product->name = "Cereal";
        $product->price = "$20";
        $product->description = "Hola esta es el cereal";
        $product->id_category = 1;
        $product->id_type = 1;
        $product->id_brand = 1;
        $product->save();

        $product = new Product();
        $product->code = "123457";
        $product->name = "Mantequilla";
        $product->price = "$5";
        $product->description = "Hola esta es la mantequilla";
        $product->id_category = 3;
        $product->id_type = 3;
        $product->id_brand = 3;
        $product->save();

        

    }
}
