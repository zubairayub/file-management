<?php
use App\Models\Package;

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
