<?php

use App\Invoice;
use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distributors = App\User::where('id_user_type',3)->get();

        for ($i=0; $i < 3; $i++) { 
            $invoice = new Invoice();
            $invoice->status = 0;
            $invoice->id_order = $i;
            $invoice->id_user = $distributors[$i]->id;
            $invoice->save();
        }
        
    }
}
