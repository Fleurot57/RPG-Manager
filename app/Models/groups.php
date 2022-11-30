<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class groups extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'user_id',
        'name',
        'description',
        'number',
    ];

    private string $name;

    private string $description;

    private int $number;
    
}
