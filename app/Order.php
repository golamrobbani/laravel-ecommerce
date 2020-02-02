<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;
use App\Orderitem;

class Order extends Model
{

     /**
     * Get the transactions for the orders.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
     /**
     * Get the items for the orders.
     */
    public function items()
    {
        return $this->hasMany(Orderitem::class);
    }

}
