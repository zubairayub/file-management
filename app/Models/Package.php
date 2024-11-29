<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    // Define the table if it differs from the default (Laravel assumes plural form of the model name)
    protected $table = 'packages';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'package_name',
        'quota',
        'price',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
