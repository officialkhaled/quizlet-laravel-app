<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Question;
use Exception;
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
            ], compact('adminData'));
    }

    /* Category */
    public function category()
    {
        $categories = Category::paginate(10);

        return view('admin.partials.category.list-category', ['categories' => $categories]);
    }

    public function store(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        try {
            $category->fill($validatedData)->save();

            return redirect()->back()->with('success', 'Category added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.', 500);
        }
    }

    public function destroy($id)
    {
        $category = Category::where('id', $id)->get()->first();
        $category->delete();

        return redirect()->back();
    }

    public function updateStatus($id)
    {
        $category = Category::findOrFail($id);

        $category->status = $category->status == 1 ? 0 : 1;
        $category->save();

        return back()->with('success', 'Category status updated successfully.');
    }

    public function edit($id)
    {
        $category = Category::where('id', $id)->get()->first();
        return view('admin.partials.category.edit-category', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        $category->update([
            'name' => $validatedData['name'],
        ]);

        return redirect()->route('category')->with('success', 'Category updated successfully.');
    }

    /* Quiz */
    public function quiz()
    {
        $categories = Category::where('status', '1')->get();
        $quizzes = Quiz::select(['quizzes.*', 'categories.name as category_name'])
            ->join('categories', 'quizzes.category_id', '=', 'categories.id')
            ->paginate(10);

        return view('admin.partials.quiz.list-quiz', [
            'quizzes' => $quizzes,
            'categories' => $categories
        ]);

        /*$categories = Category::query()
            ->where('status', '1')->get();

        $quizzes = Quiz::paginate(10);

        return view('admin.partials.quiz.list-quiz', [
            'quizzes' => $quizzes,
            'categories' => $categories
        ]);*/
    }

    public function storeQuiz(Request $request, Quiz $quiz)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'exam_date' => 'required',
            'exam_duration' => 'required',
        ]);

        try {
            $quiz->fill($validatedData)->save();

            return redirect()->back()->with('success', 'Quiz added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.', 500);
        }
    }

    //Adding new exam page
    public function add_new_exam(Request $request)
    {
        $validator = Validator::make($request->all(), ['title' => 'required', 'exam_date' => 'required', 'exam_category' => 'required',
            'exam_duration' => 'required']);

        if ($validator->fails()) {
            $arr = array('status' => 'false', 'message' => $validator->errors()->all());
        } else {

            $exam = new Oex_exam_master();
            $exam->title = $request->title;
            $exam->exam_date = $request->exam_date;
            $exam->exam_duration = $request->exam_duration;
            $exam->category = $request->exam_category;
            $exam->status = 1;
            $exam->save();

            $arr = array('status' => 'true', 'message' => 'exam added successfully', 'reload' => url('admin/manage_exam'));

        }

        echo json_encode($arr);
    }

    //editing exam status
    public function exam_status($id)
    {

        $exam = Oex_exam_master::where('id', $id)->get()->first();

        if ($exam->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $exam1 = Oex_exam_master::where('id', $id)->get()->first();
        $exam1->status = $status;
        $exam1->update();
    }

    //Deleting exam status
    public function delete_exam($id)
    {
        $exam1 = Oex_exam_master::where('id', $id)->get()->first();
        $exam1->delete();
        return redirect(url('admin/manage_exam'));
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
