<?php
use App\Models\Package;
use App\Models\Folder;
use App\Models\SubFolder;
use App\Models\User;


if (! function_exists('checkQuota')) {
    /**
     * Check if the user has exceeded their quota.
     *
     * @param  int  $quotaUsed
     * @param  int  $packageQuota
     * @return bool
     */
     function checkQuota()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Find the associated package based on the user's package_id
        $package = Package::find($user->package_id);

        // Check if the package exists
        if ($package) {
            // Compare the user's quota_used with the package's quota
            if ($user->quota_used >= $package->quota) {
                // Quota exceeded, return true
                return true;
            }
        }

        // If package is not found or quota is not exceeded, return false
        return false;
    }

}

if (! function_exists('getFullPath')) {
    // Helper function to get full path recursively
    function getFullPath($folder, $userId = null,$sub_folder = null)
    {
        // Use the provided userId, or fallback to Auth::id() if userId is null
        $userId = $userId ?? Auth::id();

        if($sub_folder)
        {
            $parentFolder = SubFolder::findOrFail($folder);
            return  $parentFolder->path;

        }
        if ($folder->parent_folder_id) {
            // Recursively build the path from parent folders
            $parentFolder = Folder::findOrFail($folder->parent_folder_id);
            return getFullPath($parentFolder, $userId) . '/' . $folder->name;  // Recursion without $this
        } else {
            // Base folder path for the specified user
            $user = User::findOrFail($userId);
          
            return 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) . '/' . $folder->name;
        }
    }

}
