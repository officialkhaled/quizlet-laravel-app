<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);

        $category_count = Category::get()->count();
        $quiz_count = Quiz::get()->count();
        $question_count = Question::get()->count();

        return view('user.partials.dashboard', [
            'quiz' => $quiz_count,
            'category' => $category_count,
            'question' => $question_count,
            'userData' => $userData
        ]);
    }

    public function welcome_quiz()
    {
        return view('user.partials.welcome-quiz');
    }

    public function quiz()
    {
        return view('user.partials.quiz');
    }
}
