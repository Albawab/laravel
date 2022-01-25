<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tafel extends Model
{
    protected $fillable = [
        'number',
        'number_of_guest',
        'description',
    ];


    public function orders()
    {
        return $this->hasMany(Order::class);
        // ga naar period_items en haal elke periodItems met Id van deze period. => period 1 . Gaat elke period_items-> charity_id = 1
    }
    use HasFactory;
}
