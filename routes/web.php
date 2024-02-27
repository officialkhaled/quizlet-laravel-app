<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('welcome');
});

/* User Routes*/
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/welcome-quiz', [UserController::class, 'welcome_quiz'])->name('welcome-quiz');
    Route::get('/quiz', [UserController::class, 'quiz'])->name('quiz');
});

/* Admin Routes */
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/view-quiz', [AdminController::class, 'view_quiz'])->name('view-quiz');

    /* Category */
    Route::get('/category', [AdminController::class, 'category'])->name('category');
    Route::post('/add-new-category', [AdminController::class, 'store'])->name('add-category');
    Route::get('/delete-category/{id}', [AdminController::class, 'destroy'])->name('delete-category');
    Route::patch('/update-status/{id}', [AdminController::class, 'update_status'])->name('update-status');
//    Route::post('/admin/edit-new-category', [AdminController::class, 'edit_new_category'])->name('category');
//    Route::get('/admin/edit-category/{id}', [AdminController::class, 'update'])->name('edit-category');

    Route::get('/admin/{category}/edit', [AdminController::class, 'edit'])->name('edit-category');
    Route::post('/admin/{category}', [AdminController::class, 'update'])->name('update-category');


    /*  */
    Route::get('/admin/create-quiz', [AdminController::class, 'create_quiz'])->name('create-quiz');
    Route::get('/admin/store-quiz', [AdminController::class, 'storeQuestion'])->name('store-quiz');
});


/* Profile */
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
