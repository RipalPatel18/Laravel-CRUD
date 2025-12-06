<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    // GET /students
 public function index()
{
    $students = \App\Models\Student::all();
    return view('students.index', compact('students'));
}


    // GET /students/create
    public function create()
    {
        return view('students.create');
    }

    // POST /students
    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());

        Session::flash('success', 'Student added successfully');
        return redirect()->route('students.index');
    }

    // GET /students/{student}
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // GET /students/{student}/edit
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // PUT /students/{student}
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        Session::flash('success', 'Student updated successfully');
        return redirect()->route('students.index');
    }

    // Soft delete (trash)
    public function trash($id)
    {
        Student::destroy($id);
        Session::flash('success', 'Student trashed successfully');
        return redirect()->route('students.index');
    }

    // Hard delete
    public function destroy($id)
    {
        $student = Student::withTrashed()->where('id', $id)->first();
        $student->forceDelete();
        Session::flash('success', 'Student deleted permanently');
        return redirect()->route('students.index');
    }

    // View trashed students (optional)
    public function trashed()
    {
        $students = Student::onlyTrashed()->get();
        return view('students.index', compact('students'));
    }

    // Restore from trash
    public function restore($id)
    {
        $student = Student::withTrashed()->where('id', $id)->first();
        $student->restore();
        Session::flash('success', 'Student restored successfully');
        return redirect()->route('students.trashed');
    }
}
