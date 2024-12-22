<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    
    // Add the 'name' field to the $fillable array
    protected $fillable = ['name', 'status', 'is_status'];
}
