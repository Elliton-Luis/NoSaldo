<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'description',
        'received_at'
    ];
}