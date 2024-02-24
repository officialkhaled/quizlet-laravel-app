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

    public function storeQuestion(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $question = Question::create([
            'title' => $request->title,
            'question_text' => $request->question_text,
        ]);

        return redirect('view-quiz');
    }
}
