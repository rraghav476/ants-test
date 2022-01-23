<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answereSheet extends Model
{
    use HasFactory;
    protected $fillable=[
        "answer",
        'user_id',
        'question_id' 
    ];

}
