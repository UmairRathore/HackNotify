<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = "companies";
    protected $fillable =
        [
            'name',
            'industry',
            'date_of_data_breach',
            'number_of_leaked_accounts',
            'website',
            'detail',
        ];

}
