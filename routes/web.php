<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\ItinController;
use App\Http\Controllers\einapplication;
use App\Http\Controllers\Bussinesformation;
use App\Http\Controllers\BoiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    $user = auth()->user();
    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role === 'customer') {
        return redirect()->route('user.dashboard');
    }

    abort(403, 'Unauthorized'); // Handle unexpected roles or no role
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin/dashboard', function () {
//     return view('dashboard'); // Admin dashboard view
// })->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');

Route::get('/user/dashboard', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/boi', [BoiController::class, 'index'])->name('showboi');
    Route::get('/business', [Bussinesformation::class, 'index'])->name('showbusiness');
    Route::get('/einapplication', [einapplication::class, 'index'])->name('showein');
    Route::get('/itin', [ItinController::class, 'index'])->name('showitin');
    Route::get('/file-manager', [FileManagerController::class, 'index'])->name('file-manager.index');
    Route::get('/folder/{folderId}/subfolders/{subfolderId?}', [FileManagerController::class, 'showSubFolders'])
    ->name('folder.showSubFolders');
    Route::post('/file-manager/folder', [FileManagerController::class, 'createFolder'])->name('file-manager.create-folder');
    Route::post('/create-subfolder/{parentFolderId}', [FileManagerController::class, 'createSubFolder'])->name('folder.createSubFolder');
    Route::post('/subfolder/{folderId}', [FileManagerController::class, 'createSubFolder'])->name('subfolder.create');
    Route::post('/file-manager/upload', [FileManagerController::class, 'uploadFile'])->name('file-manager.upload-file');
    Route::delete('/file-manager/file/{file}', [FileManagerController::class, 'deleteFile'])->name('file-manager.delete-file');
    Route::delete('/file-manager/folder/{folder}', [FileManagerController::class, 'deleteFolder'])->name('file-manager.delete-folder');
    Route::resource('packages', PackageController::class);
    Route::get('/quota-exceeded', [PackageController::class, 'quotaExceeded'])->name('quota.exceeded');
        // Edit User Route
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

    // Update User Route
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');

    // Delete User Route
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    
});



Route::get('/download/file/{file_id}', [FileManagerController::class, 'downloadFile'])->name('file.download');




require __DIR__.'/auth.php';
