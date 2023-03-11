<?php

namespace App\Models;

use App\Casts\CreatedAtCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','body'];

    protected $casts = [
        'created_at'        => CreatedAtCast::class,
        'updated_at'        => CreatedAtCast::class,
    ];

    protected $dates = ['created_at', 'updated_at'];
}
