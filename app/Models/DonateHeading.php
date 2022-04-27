<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonateHeading extends Model
{
    use HasFactory;
    protected $table='donate_headings';

    protected $fillable=[
        'title',
        'paragraph'
    ];
}
