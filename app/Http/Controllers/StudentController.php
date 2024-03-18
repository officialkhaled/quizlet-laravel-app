<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('usertype', 1)->get();

        return view('admin.partials.student.list-student', ['students' => $students]);
    }

    public function store(Request $request, User $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        try {
            $student->fill($validatedData)->save();

            return redirect()->back()->with('success', 'User added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.', 500);
        }
    }

    public function edit($id)
    {
        $student = User::where('id', $id)->get()->first();
        return view('admin.partials.student.edit-student', ['student' => $student]);
    }

    public function update(Request $request, User $student)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        $student->update([
            'name' => $validatedData['name'],
        ]);

        return redirect()->route('student.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $student = User::where('id', $id)->get()->first();
        $student->delete();

        return redirect()->back();
    }

    public function updateStatus($id)
    {
        $student = User::findOrFail($id);

        $student->status = $student->status == 1 ? 0 : 1;
        $student->save();

        return back()->with('success', 'Student status updated successfully.');
    }
}
