<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'name',
        'description',
        'classe',
        'pv',
        'magie',
        'force',
        'agility',
        'intelligence',
    ];

    private string $name;
}
