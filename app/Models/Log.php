<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model {

    protected $table = 'orders_activity_logs';
    
    protected $fillable = [
        'status_from',
        'status_to',
        'logged_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function order() {
        return $this->belongsTo(Order::class, 'contract_order_id');
    }
}
