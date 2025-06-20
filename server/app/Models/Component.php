<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    protected $table = 'component';
    protected $fillable = [
        'item_code',
        'product_name',
        'part',
        'price',
        'quantity',
        'image',
    ];
}
