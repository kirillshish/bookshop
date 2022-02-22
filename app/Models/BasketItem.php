<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BasketItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'basket_items';

    public $timestamps = false;

    protected $fillable = [
        'basket_id',
        'book_id'
    ];
}
