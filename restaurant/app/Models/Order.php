<?php

namespace App\Models;

use App\Models\OrderLine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'tafel_id',
        'open',
    ];

    public function tafel()
    {
        return $this->belongsTo(tafel::class);
    }

    public function scopeOrdersOpen($query)
    {
        // $query->whereStatus(true);
        // $query->where.....(true);
        return $query->whereOpen(true); // => $query->where('open',1);
    }

    public function scopeFirstOpen($query)
    {
        return $query->whereOpen(true)->first();
    }

    public function order_lines()
    {
        return $this->hasMany(OrderLine::class);
    }
}
