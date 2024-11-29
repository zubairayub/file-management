<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    use HasFactory;

    // Specify the table name (optional if it follows convention)
    protected $table = 'user_packages';

    // Define fillable attributes
    protected $fillable = [
        'user_id',
        'package_id',
        'package_type',
        'expiry_date',
    ];

    // Define relationships

    // A UserPackage belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class); // Assuming you have a User model
    }

    // A UserPackage belongs to a Package
    public function package()
    {
        return $this->belongsTo(Package::class); // Assuming you have a Package model
    }

    // Example method to check if the package is expired
    public function isExpired()
    {
        return $this->expiry_date && now()->greaterThan($this->expiry_date);
    }
}
