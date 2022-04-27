<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badnews extends Model
{
    use HasFactory;

    protected $table= 'badnews';
    protected $fillable =
        [
            'name','logo','categories','website','detail'
    ];
}
