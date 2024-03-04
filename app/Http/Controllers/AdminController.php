<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Question;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        $admin_count = User::where('usertype', 0)->count();
        $user_count = User::where('usertype', 1)->count();
        $category_count = Category::get()->count();
        $quiz_count = Quiz::get()->count();
        $question_count = Question::get()->count();

        return view('admin.partials.dashboard',
            [
                'user' => $user_count,
                'quiz' => $quiz_count,
                'admin' => $admin_count,
                'category' => $category_count,
                'question' => $question_count
            ], ['adminData' => $adminData]);
    }

    //Edit Exam
    public function edit_exam($id)
    {
        $data['category'] = Oex_category::where('status', '1')->get()->toArray();
        $data['exam'] = Oex_exam_master::where('id', $id)->get()->first();

        return view('admin.edit_exam', $data);
    }

    //Editing Exam
    public function edit_exam_sub(Request $request)
    {

        $exam = Oex_exam_master::where('id', $request->id)->get()->first();
        $exam->title = $request->title;
        $exam->exam_date = $request->exam_date;
        $exam->category = $request->exam_category;
        $exam->exam_duration = $request->exam_duration;

        $exam->update();

        echo json_encode(array('status' => 'true', 'message' => 'Successfully updated', 'reload' => url('admin/manage_exam')));

    }

    public function view_quiz()
    {
        $questions = Question::all();

        return view('admin.partials.quiz.create-quiz');
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
