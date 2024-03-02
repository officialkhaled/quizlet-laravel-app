<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
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

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
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
}
