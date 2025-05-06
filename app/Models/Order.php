<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_name', 'amount', 'status'];
    // protected $casts = [
    //     'amount' => 'decimal:2',
    // ];
    // protected $attributes = [
    //     'status' => 'pending',
    // ];
}
