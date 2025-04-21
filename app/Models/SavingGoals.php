<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavingGoals extends Model
{
    protected $fillable = [
        'user_id',
        'target_amount',
        'deadline'
    ];
}
