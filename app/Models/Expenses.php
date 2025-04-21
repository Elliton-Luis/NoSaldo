<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $fillable = [
        'price',
        'description',
        'type',
        'due_date'
    ];
}