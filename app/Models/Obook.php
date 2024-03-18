<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obook extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'task',
        'status',
    ];
}
