<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VarietyCode extends Model
{
    protected $fillable = [
        'name',
        'variety_code',
        'img',
        'is_status',
    ];
}
