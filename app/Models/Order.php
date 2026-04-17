<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'contract_orders';
    
    protected $fillable = [
        'title',
        'description',
        'time_expected',
        'time_consumed',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function contract() {
        return $this->belongsTo(Contract::class);
    }
}
