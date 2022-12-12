<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'codeOrder',
        'total',
        'orderStatus',
        'minutes',
        'seconds',
        'tables_id'
    ];

}
