<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/admin/dashboard');
    }
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    /* User */
    Route::group(['middleware' => ['user']], function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
        Route::get('/welcome-quiz', [UserController::class, 'welcome_quiz'])->name('welcome-quiz');
        Route::get('/quiz', [UserController::class, 'quiz'])->name('user-quiz');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('user.profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('user.profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('user.profile.destroy');
    });

    /* Admin */
    Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/view-quiz', [AdminController::class, 'view_quiz'])->name('view-quiz');

        /* Category */
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::post('/create', [CategoryController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
            Route::patch('/update-status/{id}', [CategoryController::class, 'updateStatus'])->name('update-status');
            Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('/{category}', [CategoryController::class, 'update'])->name('update');
        });

        /* Quiz */
        Route::group(['prefix' => 'quiz', 'as' => 'quiz.'], function () {
            Route::get('/', [QuizController::class, 'index'])->name('index');
            Route::post('/create', [QuizController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [QuizController::class, 'destroy'])->name('delete');
            Route::patch('/update-status/{id}', [QuizController::class, 'updateStatus'])->name('update-status');
            Route::get('/edit/{quiz}', [QuizController::class, 'edit'])->name('edit');
            Route::post('/{quiz}', [QuizController::class, 'update'])->name('update');
        });

        /* Question */
        Route::group(['prefix' => 'question', 'as' => 'question.'], function () {
            Route::get('/{id}', [QuestionController::class, 'index'])->name('index');
            Route::post('/create/{id}', [QuestionController::class, 'store'])->name('store');
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


require __DIR__ . '/auth.php';
