<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index($id)
    {
        $questions = Question::where('quiz_id', $id)->paginate(10);
        return view('admin.partials.question.list-question', [
            'questions' => $questions
        ]);
    }

    public function create()
    {
        return view('admin.partials.question.create');
    }

    public function store(Request $request, Quiz $quiz)
    {
        // dd($request->all());
        /* $validatedData = $request->validate([
            'question_text' => 'required',
            'answer_type' => 'required',
        ]); */

        try {
            $isCorrect = $request->input('is_correct');
            $options = collect($request->input('choice'))->filter(fn($value) => $value !== null);
            $formatData = [
                'question_text' => $request->input('question_text'),
                'answer_type' => $request->input('answer_type'),
            ];

            DB::beginTransaction();
            $question = $quiz->questions()->create($formatData);

            foreach ($options as $key => $option) {
                $formatOptions = [
                    'choice' => $option,
                    'is_correct' => $isCorrect == $key ? 1 : 0,
                ];

                $question->options()->create($formatOptions);
            }
            DB::commit();

            return redirect()->back()->with('success', 'Question added successfully.');
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

        return view('admin.partials.question.edit-question', [
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

        return redirect()->route('question.index')->with('success', 'Quiz updated successfully.');
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
