<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    // use HasFactory;

    // Add 'img' to the fillable property to allow mass assignment
    protected $fillable = [
        'title',
        'img',
        'status',
        'is_status',
    ];
}
