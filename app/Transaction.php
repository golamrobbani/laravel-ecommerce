<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Transaction extends Model
{
    /**
     * Get the order that owns the transaction.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
