<?php

use App\Models\Package;
use App\Models\Folder;
use App\Models\SubFolder;
use App\Models\User;
use App\Models\UserPackage;
use Illuminate\Support\Facades\Auth;

if (!function_exists('checkQuota')) {
    /**
     * Check if the user has exceeded their quota.
     *
     * @return bool
     */
    function checkQuota()
    {
        $user = Auth::user();

        if (!$user) {
            return false; // No user is logged in
        }

        // Get all user packages
        //$packages = UserPackage::where('user_id', $user->id)->with('package')->get();
         // Get all user packages
         $packages = UserPackage::where('user_id', $user->id)
         ->when(function ($query) {
             // Apply expiry date check only if package_type is not 'one_time'
             return $query->where('package_type', '!=', 'one_time');
         }, function ($query) {
             return $query->where('expiry_date', '>=', now());
         })
         ->orWhere(function ($query) {
             // If package_type is 'one_time', skip expiry check
             return $query->where('package_type', 'one_time');
         })
         ->with('package')
         ->get();

        if ($packages->isEmpty()) {
            return true; // No valid package found, consider it as exceeded
        }

        // Calculate total storage quota assigned to the user
        $totalStorage = $packages->sum(fn($userPackage) => $userPackage->package->quota ?? 0);
        $quotaUsed = $user->quota_used ?? 0;

        // return [
        //     'quota_used' => $quotaUsed,
        //     'total_storage' => $totalStorage,
        // ];
        // Calculate total allowed quota
       // $totalQuota = $packages->sum(fn($userPackage) => $userPackage->package->quota ?? 0);

        return $user->quota_used >= $totalStorage;
    }
}

if (!function_exists('getFullPath')) {
    /**
     * Generate the full storage path for a folder or sub-folder.
     *
     * @param mixed $folder
     * @param int|null $userId
     * @param bool $sub_folder
     * @return string
     */
    function getFullPath($folder, $userId = null, $sub_folder = false)
    {
        $userId = $userId ?? Auth::id();

        if ($sub_folder) {
            $parentFolder = SubFolder::find($folder);
            return $parentFolder ? $parentFolder->path : '';
        }

        if ($folder->parent_folder_id) {
            $parentFolder = Folder::find($folder->parent_folder_id);
            return $parentFolder ? getFullPath($parentFolder, $userId) . '/' . $folder->name : '';
        }

        $user = User::find($userId);
        return $user ? 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) . '/' . $folder->name : '';
    }
}

if (!function_exists('getStorageDetails')) {
    /**
     * Retrieve user's storage usage and quota details.
     *
     * @return array
     */
    function getStorageDetails()
    {
        $user = Auth::user();

        if (!$user) {
            return [
                'quota_used' => 0,
                'total_storage' => 0,
            ];
        }

        // Get all user packages
        $packages = UserPackage::where('user_id', $user->id)
            ->when(function ($query) {
                // Apply expiry date check only if package_type is not 'one_time'
                return $query->where('package_type', '!=', 'one_time');
            }, function ($query) {
                return $query->where('expiry_date', '>=', now());
            })
            ->orWhere(function ($query) {
                // If package_type is 'one_time', skip expiry check
                return $query->where('package_type', 'one_time');
            })
            ->with('package')
            ->get();




        if ($packages->isEmpty()) {
            return [
                'quota_used' => 0,
                'total_storage' => 0,
            ];
        }

        // Calculate total storage quota assigned to the user
        $totalStorage = $packages->sum(fn($userPackage) => $userPackage->package->quota ?? 0);
        $quotaUsed = $user->quota_used ?? 0;

        return [
            'quota_used' => $quotaUsed,
            'total_storage' => $totalStorage,
        ];
    }
}




if (!function_exists('formatBytes')) {
    function formatBytes($bytes, $precision = 2) {
        if ($bytes == 0) return '0 B';
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$precision}f", $bytes / pow(1024, $factor)) . ' ' . $units[$factor];
    }
}

