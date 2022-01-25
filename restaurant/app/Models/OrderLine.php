<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderLine extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'amount',
        'order_id',         
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
