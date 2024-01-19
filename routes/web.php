<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\PhotoController;



Route::group(['prefix'=>'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/tasks', [AdminController::class, 'task'])->name('tasks');
    Route::get('/calender', [AdminController::class, 'calender'])->name('calender');
    Route::get('/icons', [AdminController::class, 'icons'])->name('icons');
    Route::get('/forms', [AdminController::class, 'forms'])->name('forms');
    Route::get('/tables', [AdminController::class, 'tables'])->name('tables');

    //================== image upload:======================
    Route::get('/imageUplode', [AdminController::class, 'imageUplode'])->name('imageUplode');
    Route::post('/singleImage', [ImageController::class,'singleImgUp'])->name('singleImgUp');
    //==========================image-end===================

    //=========================gallary-album=============================
     Route::get('/gallary', [AlbumController::class, 'gallary'])->name('gallary');
     Route::get('/create-album', [AlbumController::class, 'createAlbum'])->name('create-album');
     Route::post('/gallary', [AlbumController::class, 'storeAlbum'])->name('store');
     Route::get('/show/{id}', [AlbumController::class, 'showAlbum'])->name('show');
     Route::delete('/gallary/{id}', [AlbumController::class, 'destroy'])->name('destroy');
     //=========================end-gallary-album======================

    //=========================gallary-photo===========================
    Route::get('/photo',[PhotoController::class,'photo'])->name('photo');
    Route::post('/photo-store',[PhotoController::class,'store'])->name('photo-store');
    //=========================end-gallary-photo===========================
    
   
});


    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::get('/reset', [AdminController::class, 'reset'])->name('reset');