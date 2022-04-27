<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndianBloodDonors extends Model
{
    use HasFactory;
    protected $table = 'indian_blood_donors';
    protected $fillable =
        [
            'company',
            'logo',
            'industry',
            'phone',
            'email',
            'date_of_data_breach',
            'number_of_leaked_accounts',
            'website',
            'detail',
        ];
}
