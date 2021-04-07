<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'invoice_id' => 1,
                'item' => 'Bantal',
                'unit' => 'Pcs',
                'unit_price' => 20000,
                'qty' => 1,
                'total' => 20000,
                'remark' => null,
            ],
            [
                'invoice_id' => 1,
                'item' => 'Guling',
                'unit' => 'Pcs',
                'unit_price' => 30000,
                'qty' => 1,
                'total' => 30000,
                'remark' => null,
            ],
            [
                'invoice_id' => 2,
                'item' => 'Selimut',
                'unit' => 'Pcs',
                'unit_price' => 40000,
                'qty' => 1,
                'total' => 40000,
                'remark' => null,
            ],
            [
                'invoice_id' => 2,
                'item' => 'Tetangga',
                'unit' => 'Pcs',
                'unit_price' => 5000,
                'qty' => 1,
                'total' => 5000,
                'remark' => null,
            ],
        ]);
    }
}
