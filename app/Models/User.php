<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'package_id',    
        'quota_used',    
        'prefix',        
        'last_name',     
        'phone_number',  
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function folders()
    {
        return $this->hasMany(Folder::class); // Assuming you have a Folder model
    }

   
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id'); // Ensure 'package_id' matches the column name in the users table
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function userPackages()
    {
        return $this->hasMany(UserPackage::class); // Or the appropriate relationship method
    }
    
}
