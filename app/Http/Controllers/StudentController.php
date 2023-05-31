<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'age' => 'required|integer',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        Student::create($validatedData);

        return redirect()->route('student.index')->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'age' => 'required|integer',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        $student->update($validatedData);

        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
    }
}
