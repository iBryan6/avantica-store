<?php

use App\Invoice;
use App\User;
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
        $distributors = User::where('id_user_type', 3)->get();

        for ($i = 1; $i <= 3; $i++) {
            $invoice = new Invoice();
            $invoice->status = random_int(0, 2);
            $invoice->id_order = $i;
            $invoice->id_user = $distributors[$i]->id;
            $invoice->save();
        }
    }
}