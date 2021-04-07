<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'invoice_id',
        'item',
        'unit',
        'unit_price',
        'qty',
        'total',
        'remark'
    ];

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }
}
