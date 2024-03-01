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

    public function update_status($id)
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
