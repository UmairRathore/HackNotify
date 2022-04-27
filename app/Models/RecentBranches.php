<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentBranches extends Model
{
    use HasFactory;

    protected $table = 'recent_branches';

    protected $fillable = [
        'rb_image',
        'title',
        'paragraph'
    ];
}
