<?php

use App\Stock;
use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 7; $i++) { 
            $stock = new Stock();
            $stock->units = random_int(0,100);
            $stock->id_products = $i;
            $stock->save();
        }
        
    }
}
