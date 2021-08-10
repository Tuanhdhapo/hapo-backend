<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lessons_user extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'lesson_id', 'used_id', 'lessons_user'
    ];
}
