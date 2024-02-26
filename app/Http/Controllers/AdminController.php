<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /* Category */
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

    public function category()
    {
        $categories = Category::paginate(10);

        return view('admin.partials.category', ['categories' => $categories]);
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
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function destroy($id)
    {
        $category = Category::where('id', $id)->get()->first();
        $category->delete();

        return redirect()->back();
    }

    public function update_status($id)
    {
        $category = Category::findOrFail($id);

        $category->status = $category->status == 1 ? 0 : 1;
        $category->save();

        return back()->with('success', 'Category status updated successfully.');
    }

    /* needs work -- start */
    public function edit(Category $category)
    {
        return view('edit-category', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name' => 'required|string',
        ]);

        $category->update([
            'name' => $validated['category_name'],
        ]);

        return redirect()->route('some.route')->with('success', 'Category updated successfully.');
    }

    public function edit_category($id)
    {
        $category = Category::where('id', $id)->get()->first();
        return view('admin.category', ['category' => $category]);
    }

    public function Editing(Request $request, Category $category)
    {
        $cat = Category::where('id', $request->id)->get()->first();
        $cat->name = $request->name;
        $cat->update();
        echo json_encode(array('status' => 'true', 'message' => 'updated successfully', 'reload' => route('category')));
    }
    /* need work -- end */

    /* Manage Quiz */
    public function manage_quiz()
    {
        $categories = Category::where('status', '1')->paginate(10);
        $quizzes = Quiz::select(['quizzes.*', 'categories.name as cat_name'])
            ->join('categories', 'quizzes.category', '=', 'categories.id')
            ->paginate(10);

        return view('admin.partials.manage-quiz', compact('categories', 'quizzes'));
    }

    public function add_quiz(Request $request, Quiz $quiz)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'exam_date' => 'required',
            'exam_duration' => 'required|numeric|min:10',
        ]);

        try {
            $quiz->fill($validatedData)->save();
            return redirect()->back()->with('success', 'Quiz added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
    /*
            if ($validatedData->fails()) {
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

            echo json_encode($arr);*/


    //editing exam status
    public
    function quiz_status($id)
    {
        $quiz = Quiz::findOrFail($id);

        $quiz->status = $quiz->status == 1 ? 0 : 1;
        $quiz->save();

        return back()->with('success', 'Quiz status updated successfully.');
    }

    //Deleting exam status
    public
    function delete_exam($id)
    {
        $exam1 = Oex_exam_master::where('id', $id)->get()->first();
        $exam1->delete();
        return redirect(url('admin/manage_exam'));
    }


    public
    function view_quiz()
    {
        $questions = Question::all();

        return view('admin.partials.view-quiz');
    }

    public
    function create_quiz()
    {
        return view('admin.partials.create-quiz');
    }

    public
    function storeQuestion(Request $request)
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
