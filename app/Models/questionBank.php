<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionBank extends Model
{
    use HasFactory;
    protected $fillable=[
            "question",
            'level',
            'answer'
    ];
}
