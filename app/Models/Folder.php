<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $table = 'folders';
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    public function files()
    {
        return $this->hasMany(File::class);
    }

    /**
     * Relationship with the SubFolder model.
     * Each folder can have many subfolders.
     */
    public function subFolders()
    {
        return $this->hasMany(SubFolder::class, 'parent_folder_id');
    }

    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
