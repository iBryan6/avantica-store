<?php

use App\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leche_pil_id=1;$leche_santa_clara_id=2;$iphoneXS_id=3;$samsung_galaxy_s9=4;$xbox_one=5;$ps4_pro=6;


        $order_item = new OrderItem();
        $order_item->id_product = $leche_pil_id;
        $order_item->id_order = 1;
        $order_item->save();

        $order_item = new OrderItem();
        $order_item->id_product = $leche_santa_clara_id;
        $order_item->id_order = 1;
        $order_item->save();

        $order_item = new OrderItem();
        $order_item->id_product = $xbox_one;
        $order_item->id_order = 1;
        $order_item->save();

        $order_item = new OrderItem();
        $order_item->id_product = $iphoneXS_id;
        $order_item->id_order = 2;
        $order_item->save();

        $order_item = new OrderItem();
        $order_item->id_product = $ps4_pro;
        $order_item->id_order = 2;
        $order_item->save();

        $order_item = new OrderItem();
        $order_item->id_product = $xbox_one;
        $order_item->id_order = 3;
        $order_item->save();
        
    }
}
