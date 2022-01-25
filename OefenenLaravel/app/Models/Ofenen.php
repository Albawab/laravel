<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofenen extends Model
{
    protected $fillable = [
        'name',
        'start',
        'end',
        'start_time',
        'end_time',

    ];
    use HasFactory;
}
