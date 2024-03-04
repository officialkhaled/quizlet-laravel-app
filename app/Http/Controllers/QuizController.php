<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Quiz;
use App\Models\Category;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', '1')->get();
        $quizzes = Quiz::select(['quizzes.*', 'categories.name as category_name'])
            ->join('categories', 'quizzes.category_id', '=', 'categories.id')
            ->paginate(10);

        return view('admin.partials.quiz.list-quiz', [
            'quizzes' => $quizzes,
            'categories' => $categories
        ]);
    }

    public function store(Request $request, Quiz $quiz)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'quiz_date' => 'required',
            'quiz_duration' => 'required',
        ]);

        try {
            $quiz->fill($validatedData)->save();
            return redirect()->back()->with('success', 'Quiz added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.', 500);
        }
    }

    public function edit($id)
    {
        $quiz = Quiz::where('id', $id)->get()->first();
        $categories = Category::query()
            ->where('id', $id)->get()->first()
            ->where('status', '1')->get();

        return view('admin.partials.quiz.edit-quiz', [
            'quiz' => $quiz,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, Quiz $quiz)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'quiz_date' => 'required',
            'quiz_duration' => 'required',
        ]);

        $quiz->update([
            'title' => $validatedData['title'],
            'category_id' => $validatedData['category_id'],
            'quiz_date' => $validatedData['quiz_date'],
            'quiz_duration' => $validatedData['quiz_duration'],
        ]);

        return redirect()->route('quiz.index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy($id)
    {
        $quiz = Quiz::where('id', $id)->get()->first();
        $quiz->delete();

        return redirect()->back();
    }

    public function updateStatus($id)
    {
        $quiz = Quiz::findOrFail($id);

        $quiz->status = $quiz->status == 1 ? 0 : 1;
        $quiz->save();

        return back()->with('success', 'Quiz status updated successfully.');
    }
}
