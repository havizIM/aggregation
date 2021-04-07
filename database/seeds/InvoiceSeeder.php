<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            [
                'invoice_no' => '001/INV/AIAM/2/2021',
                'customer' => 'Firman Maulana',
                'date' => '2021-02-15',
                'due' => '2021-02-17',
                'description' => 'Transfer ke 1791606298 BCA a/n Haviz Indra Maulana',
                'note' => null,
                'status' => 'Publish',
            ],
            [
                'invoice_no' => '002/INV/AIAM/2/2021',
                'customer' => 'Irwan Cahyanto',
                'date' => '2021-02-15',
                'due' => '2021-02-19',
                'description' => 'Transfer ke 1791606298 BCA a/n Haviz Indra Maulana',
                'note' => null,
                'status' => 'Draft',
            ]
        ]);
    }
}
