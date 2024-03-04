<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Category;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($id)
    {
        $data['questions'] = Question::where('quiz_id', $id)->paginate(10);
        return view('admin.partials.question.list-question', $data);
    }

    public function add_questions($id)
    {
        $data['questions'] = Question::where('quiz_id', $id)->get()->toArray();
        return view('admin.add_questions', $data);
    }

    //adding new questions
    public function add_new_question(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'ans' => 'required'
        ]);

        if ($validator->fails()) {
            $arr = array('status' => 'false', 'message' => $validator->errors()->all());

        } else {

            $q = new Oex_question_master();
            $q->exam_id = $request->exam_id;
            $q->questions = $request->question;

            if ($request->ans == 'option_1') {
                $q->ans = $request->option_1;
            } elseif ($request->ans == 'option_2') {
                $q->ans = $request->option_2;
            } elseif ($request->ans == 'option_3') {
                $q->ans = $request->option_3;
            } else {
                $q->ans = $request->option_4;
            }


            $q->status = 1;
            $q->options = json_encode(array(
                'option1' => $request->option_1,
                'option2' => $request->option_2,
                'option3' => $request->option_3,
                'option4' => $request->option_4
            ));

            $q->save();

            $arr = array('status' => 'true', 'message' => 'successfully added',
                'reload' => url('admin/add_questions/' . $request->exam_id));
        }

        echo json_encode($arr);
    }

    public function store(Request $request, Question $question)
    {
        $validatedData = $request->validate([
            'question_text' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'answer' => 'required'
        ]);

        try {
//            $q = new Oex_question_master();
            $question->quiz_id = $request->quiz_id;
            $question->questions = $request->question_text;

            if ($request->answer == 'option_1') {
                $question->answer = $request->option_1;
            } elseif ($request->answer == 'option_2') {
                $question->answer = $request->option_2;
            } elseif ($request->answer == 'option_3') {
                $question->answer = $request->option_3;
            } else {
                $question->answer = $request->option_4;
            }

            $question->options = json_encode(array(
                'option1' => $request->option_1,
                'option2' => $request->option_2,
                'option3' => $request->option_3,
                'option4' => $request->option_4
            ));

            $question->save();

            $question->fill($validatedData)->save();
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
