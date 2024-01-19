<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\PhotoController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerifyMiddleware;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    //======================================================================
    //                         Pages Routes
    //========================================================================
    Route::get('/userprofile', [UserController::class, 'userprofile'])->name('profile');

    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard')->Middleware([TokenVerifyMiddleware::class]);
    Route::get('/tasks', [AdminController::class, 'task'])->name('tasks');
    Route::get('/calender', [AdminController::class, 'calender'])->name('calender');
    Route::get('/icons', [AdminController::class, 'icons'])->name('icons');
    Route::get('/forms', [AdminController::class, 'forms'])->name('forms');
    Route::get('/tables', [AdminController::class, 'tables'])->name('tables');
    //=========================================================================

    //================================Api Authntication=================================
    Route::post('/userLogin', [UserController::class, 'userLogin']);
    Route::post('/userRegister', [UserController::class, 'userRegister']);
    Route::post('/sendOtp', [UserController::class, 'sendOtp']);
    Route::post('/varifyOtp', [UserController::class, 'varifyOtp']);
    Route::post('/passwordReset', [UserController::class, 'passwordReset'])->middleware([TokenVerifyMiddleware::class]);
    Route::get('/userprofile', [UserController::class, 'userprofile'])->middleware([TokenVerifyMiddleware::class]);
    Route::post('/updateprofile', [UserController::class, 'updateprofile'])->Middleware([TokenVerifyMiddleware::class]);

    //================== image upload:======================
    Route::get('/imageUplode', [AdminController::class, 'imageUplode'])->name('imageUplode');
    Route::post('/singleImage', [ImageController::class, 'singleImgUp'])->name('singleImgUp');
    //==========================image-end===================

    //=========================gallary-album=============================
    Route::get('/gallary', [AlbumController::class, 'gallary'])->name('gallary');
    Route::get('/create-album', [AlbumController::class, 'createAlbum'])->name('create-album');
    Route::post('/gallary', [AlbumController::class, 'storeAlbum'])->name('store');
    Route::get('/show/{id}', [AlbumController::class, 'showAlbum'])->name('show');
    Route::delete('/gallary/{id}', [AlbumController::class, 'destroy'])->name('destroy');
    //=========================end-gallary-album======================

    //=========================gallary-photo===========================
    Route::get('/photo', [PhotoController::class, 'photo'])->name('photo');
    Route::post('/photo-store', [PhotoController::class, 'store'])->name('photo-store');

    //=========================end-gallary-photo===========================

});

//=================== =============Auth-Pages=============================

Route::get('/profile', [UserController::class, 'profilePage'])->Middleware([TokenVerifyMiddleware::class]);
Route::get('/login', [UserController::class, 'userLoginPage']);
Route::get('/register', [UserController::class, 'userRegisterPage']);
Route::get('/sendOtp', [UserController::class, 'sendOtpPage']);
Route::get('/varifyOtp', [UserController::class, 'varifyOtpPage']);
Route::get('/passwordReset', [UserController::class, 'passwordResetPage']);
Route::get('/logout', [UserController::class, 'logout']);
