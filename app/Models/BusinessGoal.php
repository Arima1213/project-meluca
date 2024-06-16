<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessGoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal_name',
        'description',
        'target_date',
        'target_value',
    ];
}
