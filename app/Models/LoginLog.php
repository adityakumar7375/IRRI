<?php
// app/Models/LoginLog.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ip_address', 'location', 'user_agent'];

    // Automatically cast the location field to an array when retrieved
    protected $casts = [
        'location' => 'array',  // Converts JSON to an array automatically
    ];
}
