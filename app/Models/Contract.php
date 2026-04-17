<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model {
    
    use SoftDeletes;

    protected $table = 'contracts';

    protected $fillable = [
        'title',
        'description',
        'date_start',
        'date_end',
    ];

    public function user () {
        return $this->belongsTo(User::class, 'user_id');
    }
}
