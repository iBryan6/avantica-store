<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->id_user = 2;
        $order->code = str_random(12);
        $order->save();

        $order = new Order();
        $order->id_user = 5;
        $order->code = str_random(12);
        $order->save();

        $order = new Order();
        $order->id_user = 7;
        $order->code = str_random(12);
        $order->save();
    }
}
