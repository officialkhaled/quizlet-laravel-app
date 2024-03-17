<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index($id)
    {
        $questions = Question::with('correctAnswers')->where('quiz_id', $id)->paginate(10);
        $answer = Option::where('is_correct', 1)->get()->first();
        return view('admin.partials.question.list-question', [
            'questions' => $questions,
            'answer' => $answer,
        ]);
    }

    public function create()
    {
        return view('admin.partials.question.create');
    }

    /* public function store(Request $request, Quiz $quiz)
     {
         // Validate the incoming request data
         $validatedData = $request->validate([
             'question_text' => 'required',
             'answer_type' => 'required',
             'choice' => 'required',
             'choice.*' => 'required',
             'is_correct' => 'required' . implode(',', array_keys($request->input('choice', []))),
         ]);

         try {
             $isCorrect = $validatedData['is_correct'];
             $options = collect($validatedData['choice'])->filter(fn($value) => $value !== null);

             DB::beginTransaction();
             $formatData = [
                 'question_text' => $validatedData['question_text'],
                 'answer_type' => $validatedData['answer_type'],
             ];

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
             DB::rollBack();
             return redirect()->back()->with('error', 'Something went wrong. Error: ' . $e->getMessage());
         }
     }*/

    public function store(Request $request, Quiz $quiz)
    {
        /*$validatedData = $request->validate([
            'question_text' => 'required',
            'answer_type' => 'required',
        ]);*/

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

            return redirect()->route('quiz.question.index', ['id' => $quiz])->with('success', 'Question added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.', 500);
        }
    }

    public function edit(Quiz $quiz, $id)
    {
        $question = $quiz->questions()->findOrFail($id);

        return view('admin.partials.question.edit-question', [
            'quiz' => $quiz,
            'question' => $question,
        ]);
    }

    public function update(Request $request, Quiz $quiz, $id)
    {
        /*$validatedData = $request->validate([
            'question_text' => 'required|string|max:255',
            'answer_type' => 'required|string',
            'choice' => 'required|array|min:1',
            'choice.*' => 'required|string|max:255',
            'answer' => 'required',
        ]);*/

        try {
            DB::beginTransaction();

            $question = $quiz->questions()->findOrFail($id);

            $isCorrect = $request->input('is_correct');
            $options = collect($request->input('choice'))->filter(fn($value) => !is_null($value));

            $formatData = [
                'question_text' => $request->input('question_text'),
                'answer_type' => $request->input('answer_type'),
            ];

            $question->update($formatData);

            $question->options()->delete();
            foreach ($options as $key => $option) {
                $question->options()->create0([
                    'choice' => $option,
                    'is_correct' => $isCorrect == $key ? 1 : 0,
                ]);
            }

            DB::commit();

            return redirect()->route('quiz.question.index', ['id' => $quiz])->with('success', 'Question updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $question = Question::where('id', $id)->get()->first();
        $question->delete();

        return redirect()->back();
    }

    public function updateStatus($id)
    {
        $question = Question::findOrFail($id);

        $question->status = $question->status == 1 ? 0 : 1;
        $question->save();

        return back()->with('success', 'Question status updated successfully.');
    }
}
