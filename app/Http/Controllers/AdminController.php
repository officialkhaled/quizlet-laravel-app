<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.partials.dashboard');
    }

    public function view_quiz()
    {
        $questions = Question::all();

        return view('admin.partials.view-quiz');
    }

    public function create_quiz()
    {
        return view('admin.partials.create-quiz');
    }

    public function storeQuestion(Request $request, Question $question)
    {

    }
}
