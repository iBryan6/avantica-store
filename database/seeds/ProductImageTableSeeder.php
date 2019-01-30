<?php

use App\ProductImage;
use Illuminate\Database\Seeder;

class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leche_pil_id=1;$leche_santa_clara_id=2;$iphoneXS_id=3;$samsung_galaxy_s9=4;$xbox_one=5;$ps4_pro=6;

        // Agregando Leches
        $image = new ProductImage();
        $image->image_url = 'images/Milk/leche-pil-natural.png';
        $image->id_product = $leche_pil_id;
        $image->save();

        $image = new ProductImage();
        $image->image_url = 'images/Milk/lechepil.png';
        $image->id_product = $leche_pil_id;
        $image->save();
        

        $image = new ProductImage();
        $image->image_url = 'images/Milk/leche-santa-clara.png';
        $image->id_product = $leche_santa_clara_id;
        $image->save();

        $image = new ProductImage();
        $image->image_url = 'images/Milk/lechepil-50px.png';
        $image->id_product = $leche_pil_id;
        $image->save();

        //Agregando Celulares
        $image = new ProductImage();
        $image->image_url = 'images/Cellphones/Iphone/Iphone-XS.png';
        $image->id_product = $iphoneXS_id;
        $image->save();

        $image = new ProductImage();
        $image->image_url = 'images/Cellphones/Samsung/samsung-galaxy-s9-plus.png';
        $image->id_product = $samsung_galaxy_s9;
        $image->save();

        //Consolas

        $image = new ProductImage();
        $image->image_url = 'images/Gaming/Microsoft/Xbox-one-x.png';
        $image->id_product = $xbox_one;
        $image->save();

        $image = new ProductImage();
        $image->image_url = 'images/Gaming/Sony/playstation-4-pro.png';
        $image->id_product = $ps4_pro;
        $image->save();
        
    }
}
