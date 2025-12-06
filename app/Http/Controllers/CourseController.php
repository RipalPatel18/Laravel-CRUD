<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{

    public function index()
    {
        return view('courses.index', [
            'courses' => Course::all()
        ]);
    }


    public function create()
    {
        return view('courses.create');
    }


    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());

        Session::flash('success', 'Course added successfully');
        return redirect()->route('courses.index');
    }


    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }


    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }


    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());

        Session::flash('success', 'Course updated successfully');
        return redirect()->route('courses.index');
    }


    public function trash($id)
    {
        Course::destroy($id);

        Session::flash('success', 'Course trashed successfully');
        return redirect()->route('courses.index');
    }


    public function destroy($id)
    {
        $course = Course::withTrashed()->where('id', $id)->first();
        $course->forceDelete();

        Session::flash('success', 'Course deleted permanently');
        return redirect()->route('courses.index');
    }

 
    public function trashed()
    {
        $courses = Course::onlyTrashed()->get();
        return view('courses.index', compact('courses'));
    }


    public function restore($id)
    {
        $course = Course::withTrashed()->where('id', $id)->first();
        $course->restore();

        Session::flash('success', 'Course restored successfully');
        return redirect()->route('courses.trashed');
    }
}
