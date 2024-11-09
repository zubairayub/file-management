<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManagerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/file-manager', [FileManagerController::class, 'index'])->name('file-manager.index');
    Route::get('/folder/{folderId}/subfolders', [FileManagerController::class, 'showSubFolders'])->name('folder.showSubFolders');
    Route::post('/file-manager/folder', [FileManagerController::class, 'createFolder'])->name('file-manager.create-folder');
    Route::post('/create-subfolder/{parentFolderId}', [FileManagerController::class, 'createSubFolder'])->name('folder.createSubFolder');
    Route::post('/subfolder/{folderId}', [FileManagerController::class, 'createSubFolder'])->name('subfolder.create');
    Route::post('/file-manager/upload', [FileManagerController::class, 'uploadFile'])->name('file-manager.upload-file');
    Route::delete('/file-manager/file/{file}', [FileManagerController::class, 'deleteFile'])->name('file-manager.delete-file');
    Route::delete('/file-manager/folder/{folder}', [FileManagerController::class, 'deleteFolder'])->name('file-manager.delete-folder');
    
});

require __DIR__.'/auth.php';
