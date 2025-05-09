<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $fillable = [
        'user_id',
        'item_name',
        'price',
        'description',
        'priority'
    ];
}
