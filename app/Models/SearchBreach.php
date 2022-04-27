<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchBreach extends Model
{
    use HasFactory;
    protected $table = "search_breaches";
    protected $fillable =
        [
            'company_id',
            'phone',
            'email',
            'password',

        ];


}
