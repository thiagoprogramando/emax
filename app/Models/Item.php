<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model  {

    protected $table = 'contract_items';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'value',
    ];

    public function contract() {
        return $this->belongsTo(Contract::class);
    }
}
