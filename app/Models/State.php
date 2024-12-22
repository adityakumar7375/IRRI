<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
   // Define the table name (optional if it's the plural form of the model name)
   protected $table = 'states'; // This can be omitted if Laravel uses the plural 'states' by default

   // Specify which attributes should be mass assignable
   protected $fillable = ['country','status','is_status','state', 'abbreviation'];

   // Optional: Specify attributes that should be hidden (e.g., for API responses)
   protected $hidden = ['created_at', 'updated_at','is_status'];

   // Define any relationships here (e.g., if states have many cities)
  
}
