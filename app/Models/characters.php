<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\NullableType;

class Characters extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'classe',
        'pv',
        'magie',
        'force',
        'agility',
        'intelligence',
        'user_id',
    ];

    public function user()
{ 
    return $this->belongsTo(user::class); 
}

}
