<?php

namespace App\Http\Controllers;

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

        return view('user.partials.dashboard', compact('userData'));
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
