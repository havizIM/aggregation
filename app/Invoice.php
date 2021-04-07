<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'invoice_no',
        'date',
        'description',
        'note',
        'status'
    ];
    
    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
