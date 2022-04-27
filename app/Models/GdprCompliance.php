<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GdprCompliance extends Model
{
    use HasFactory;

    protected $table = 'gdpr_compliances';
    protected $fillable =
        [
            'g_image',
            'title',
            'paragraph'
        ];
}
