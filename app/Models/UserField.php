<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserField extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'billing_address',
        'billing_city',
        'billing_country',
        'billing_zip_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
