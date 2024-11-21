<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubFolder extends Model
{
    use HasFactory;

    protected $table = 'sub_folder'; // Make sure to specify the table if it's not plural

    protected $fillable = ['name', 'user_id', 'parent_folder_id', 'parent_id', 'path'];

    /**
     * Relationship with the Folder model.
     * Each subfolder belongs to a main folder.
     */
    public function folder()
    {
        return $this->belongsTo(Folder::class, 'parent_folder_id');
    }

    /**
     * Recursive relationship for parent subfolder.
     * A subfolder can have a parent subfolder.
     */
    public function parent()
    {
        return $this->belongsTo(SubFolder::class, 'parent_id');
    }

    /**
     * Recursive relationship for child subfolders.
     * A subfolder can have multiple child subfolders.
     */
    public function children()
    {
        return $this->hasMany(SubFolder::class, 'parent_id');
    }

      // Relationship to nested subfolders
      public function subfolders()
      {
          return $this->hasMany(SubFolder::class, 'parent_id');
      }

    /**
     * Relationship with the User model.
     * Each subfolder belongs to a specific user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

        public function files()
    {
        return $this->hasMany(File::class, 'subfolder_id');
    }
}
