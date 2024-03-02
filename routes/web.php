<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/admin/dashboard');
    }
    return view('welcome');
});

/* User Routes*/
Route::middleware(['auth'])->group(function () {
    /*  */
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/welcome-quiz', [UserController::class, 'welcome_quiz'])->name('welcome-quiz');
    Route::get('/quiz', [UserController::class, 'quiz'])->name('user-quiz');

    /* Profile*/
    Route::get('/profile', [ProfileController::class, 'edit'])->name('user.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('user.profile.destroy');


    Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/view-quiz', [AdminController::class, 'view_quiz'])->name('view-quiz');

        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            /* Category */
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::post('/create', [CategoryController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
            Route::patch('/update-status/{id}', [CategoryController::class, 'updateStatus'])->name('update-status');
            Route::get('/edit-category/{category}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('/{category}', [CategoryController::class, 'update'])->name('update');
        });

        Route::group(['prefix' => 'quiz', 'as' => 'quiz.'], function () {
            /* Quiz */
            Route::get('/', [QuizController::class, 'index'])->name('index');
            Route::post('/create', [QuizController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [QuizController::class, 'destroy'])->name('delete');
            Route::patch('/update-status/{id}', [QuizController::class, 'updateStatus'])->name('update-status');
            Route::get('/edit/{quiz}', [QuizController::class, 'edit'])->name('edit');
            Route::post('/{quiz}', [QuizController::class, 'update'])->name('update');
        });

        Route::group(['prefix' => 'question', 'as' => 'question.'], function () {
            /* Quiz */
            Route::get('/', [QuestionController::class, 'index'])->name('index');
            Route::post('/create', [QuestionController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [QuestionController::class, 'destroy'])->name('delete');
            Route::patch('/update-status/{id}', [QuestionController::class, 'updateStatus'])->name('update-status');
            Route::get('/edit/{quiz}', [QuestionController::class, 'edit'])->name('edit');
            Route::post('/{quiz}', [QuestionController::class, 'update'])->name('update');
        });

        /* Profile */
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    });

});

// /* Admin Routes */
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::get('/view-quiz', [AdminController::class, 'view_quiz'])->name('view-quiz');

//     /* Category */
//     Route::get('/category', [AdminController::class, 'category'])->name('category');
//     Route::post('/add-new-category', [AdminController::class, 'store'])->name('add-category');
//     Route::get('/delete-category/{id}', [AdminController::class, 'destroy'])->name('delete-category');
//     Route::patch('/update-status/{id}', [AdminController::class, 'update_status'])->name('update-status');
// //    Route::post('/edit-new-category', [AdminController::class, 'edit_new_category'])->name('category');
// //    Route::get('/edit-category/{id}', [AdminController::class, 'update'])->name('edit-category');
//     Route::get('/{category}/edit', [AdminController::class, 'edit'])->name('edit-category');
//     Route::post('/{category}', [AdminController::class, 'update'])->name('update-category');

//     /* Manage Quiz */
//     Route::get('/manage-quiz', [AdminController::class, 'manage_quiz'])->name('manage-quiz');
//     Route::get('/quiz-status/{id}', [AdminController::class, 'quiz_status'])->name('quiz-status');
//     Route::get('/delete-quiz/{id}', [AdminController::class, 'delete_quiz'])->name('delete-quiz');
// Route::get('/edit-quiz/{id}', [AdminController::class, 'edit_quiz'])->name('edit-quiz');

//     /*  */
//     Route::get('/admin/create-quiz', [AdminController::class, 'create_quiz'])->name('create-quiz');
//     Route::get('/admin/store-quiz', [AdminController::class, 'storeQuestion'])->name('store-quiz');
// });


require __DIR__ . '/auth.php';
