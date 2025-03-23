<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;
    protected $table = 'post_comments';
    protected $fillable = [
        'id',
        'user_id',
        'post_id',
        'comment',
    ];
}
