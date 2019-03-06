<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = ['user_id', 'customer_id', 'charge_id', 'amount'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
