<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.partials.dashboard', compact('adminData'));
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

    //Editing the categories
    public function edit_category($id)
    {
        $category = Category::where('id', $id)->get()->first();
        return view('admin.category', ['category' => $category]);
    }

    //Editing the categories
    public function Editing(Request $request, Category $category)
    {
        $cat = Category::where('id', $request->id)->get()->first();
        $cat->name = $request->name;
        $cat->update();
        echo json_encode(array('status' => 'true', 'message' => 'updated successfully', 'reload' => route('category')));
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
