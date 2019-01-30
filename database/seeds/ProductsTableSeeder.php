<?php

use App\Product;
use App\Category;
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
        //type
        $cellphone = 1;$tv = 2;$console = 3;$milk = 4;$alcohol = 5;$soda = 6;$fruits = 7;$cereals = 8;$cookies = 9;
        //brand
        $apple=3;$pil=1;$santaclara=2;$samsung=4;$microsoft=5;$sony=6;


        $product = new Product();
        $product->code = str_random(10);
        $product->name = "Leche PIL";
        $product->price = random_int(1,10);
        $product->description = "Leche pasteurizada con 1000 calorias, este producto debe mantenerse en un ambiente frio";
        $product->id_type = $milk;
        $product->id_brand = $pil;
        $product->save();

        $product = new Product();
        $product->code = str_random(10);
        $product->name = "Leche Santa Clara";
        $product->price = random_int(1,10);
        $product->description = "Leche pasteurizada con 1000 calorias, este producto debe mantenerse en un ambiente frio";
        $product->id_type = $milk;
        $product->id_brand = $santaclara;
        $product->save();

        $product = new Product();
        $product->code = str_random(10);
        $product->name = "Iphone XS";
        $product->price = random_int(100,1000);
        $product->description = "256 GB de RAM,10GB RAM, camara profesional, garantia 2 años";
        $product->id_type = $cellphone;
        $product->id_brand = $apple;
        $product->save();

        $product = new Product();
        $product->code = str_random(10);
        $product->name = "Samsung Galaxy S9+";
        $product->price = random_int(100,1000);
        $product->description = "32 GB de memoria,5GB RAM, camara profesional, garantia de 1 año";
        $product->id_type = $cellphone;
        $product->id_brand = $samsung;
        $product->save();
        
        $product = new Product();
        $product->code = str_random(10);
        $product->name = "XBOX One X";
        $product->price = random_int(500,1000);
        $product->description = "500GB de memoria, universal, garantia 4 años";
        $product->id_type = $console;
        $product->id_brand = $microsoft;
        $product->save();

        $product = new Product();
        $product->code = str_random(10);
        $product->name = "PlayStation4 Pro";
        $product->price = random_int(500,1000);
        $product->description = "700GB de memoria, garantia 5 años";
        $product->id_type = $console;
        $product->id_brand = $sony;
        $product->save();

    }
}
