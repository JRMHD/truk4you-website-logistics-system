<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAlert extends Model
{
    protected $fillable = ['recipient', 'message', 'frequency', 'is_active'];
}