<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'item';
    protected $fillable = [
        'category_id',
        'item_name',
        'price',
        'stock'
    ];
}
