<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.partials.dashboard');
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
