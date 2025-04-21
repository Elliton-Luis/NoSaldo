<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $fillable = [
        'user_id',
        'price',
        'description',
        'type',
        'due_date'
    ];
}