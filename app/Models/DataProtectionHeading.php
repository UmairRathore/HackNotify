<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProtectionHeading extends Model
{
    use HasFactory;
    protected $table = 'data_protection_headings';

    protected $fillable = [
        'title',
        'paragraph'
    ];
}
