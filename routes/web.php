<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\ItinController;
use App\Http\Controllers\einapplication;
use App\Http\Controllers\Bussinesformation;
use App\Http\Controllers\BoiController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PDFController;
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
    Route::get('/choose-package', [PackageController::class, 'quotaExceeded'])->name('quota.exceeded');
        // Edit User Route
    Route::get('users/{user}/edit', [AdminController::class, 'edit'])->name('users.edit');

    // Update User Route
    Route::put('users/{user}', [AdminController::class, 'update'])->name('users.update');

    // Delete User Route
    Route::delete('users/{user}', [AdminController::class, 'destroy'])->name('users.destroy');
    Route::get('/user/{id}/details', [AdminController::class, 'show'])->name('users.details');
    Route::post('/user/toggle-status/{userId}', [AdminController::class, 'toggleStatus']);
    Route::get('/admin/user-folders/{userId?}/{folderId?}/{subfolderId?}', [AdminController::class, 'adminShowUserFolders'])->name('admin.showUserFolders');
    Route::post('/admin/{userId}/createSubFolder/{parentFolderId}', [AdminController::class, 'adminCreateSubFolderForUser'])->name('admin.createSubFolderForUser');
    Route::get('/update-password', [PasswordController::class, 'showUpdateForm'])->name('password.update.form');
    Route::post('/update-password', [PasswordController::class, 'update'])->name('userpassword.update');
   
  

    Route::get('/reset-password/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [PasswordController::class, 'reset'])->name('password.update.reset');



    
});



Route::get('/download/file/{file_id}', [FileManagerController::class, 'downloadFile'])->name('file.download');


Route::post('/payment', [PaymentController::class, 'createTransaction'])->name('payment.create');
Route::get('/payment-form', function () {
    return view('payment_form');
})->name('payment.form');

Route::get('/file/preview/{file_id}', function ($file_id) {
    try {
        // Retrieve the file record from the database
        $file = \App\Models\File::findOrFail($file_id);

        // Check if the file exists in the specified disk
        if (!Storage::disk('private')->exists($file->path)) {
            throw new \Exception("File not found at location: {$file->path}");
        }

        // Return the file as a response
        return Storage::disk('private')->response($file->path);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        // File record not found in the database
        \Log::error("File not found in the database: {$e->getMessage()}");
        return response()->view('errors.file_error', [
            'message' => 'The requested file does not exist in our records.',
        ], 404);
    } catch (\Exception $e) {
        // General error handling
        \Log::error("File preview error: {$e->getMessage()}");
        return response()->view('errors.file_error', [
            'message' => 'Unable to preview the file. Please try again later.',
        ], 500);
    }
})->name('file.preview');


Route::get('/clear-cache', function () {
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
     // Run composer dump-autoload to regenerate autoload files
     $output = shell_exec('composer dump-autoload');
    return 'Cache cleared!';
});

Route::post('/upload-pdf', [PDFController::class, 'uploadPDF'])->name('upload-pdf');


require __DIR__.'/auth.php';
