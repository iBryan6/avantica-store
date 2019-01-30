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
        $order->date = '01/30/2019';
        $order->save();

        $order = new Order();
        $order->id_user = 5;
        $order->date = '01/28/2019';
        $order->save();

        $order = new Order();
        $order->id_user = 7;
        $order->date = '02/01/2019';
        $order->save();
    }
}
