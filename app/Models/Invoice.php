<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {

    protected $table = 'contract_invoices';
    
    protected $fillable = [
        'serie',
        'payment_value',
        'payment_credit_applied',
        'payment_date_due',
        'payment_date_paid',
        'payment_method',
        'payment_status',
        'payment_url',
        'payment_payload',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function contract() {
        return $this->belongsTo(Contract::class);
    }
}
