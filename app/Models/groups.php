<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'name',
        'description',
        'number',
    ];
    
}
