@extends('layouts.admin')

@section('content')
<h1>Edit Course</h1>

<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Course Name:</label><br>
    <input type="text" name="courseName" value="{{ $course->courseName }}"><br><br>

    <label>Course ID:</label><br>
    <input type="text" name="courseID" value="{{ $course->courseID }}"><br><br>

    <label>Description:</label><br>
    <textarea name="description">{{ $course->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>
@endsection
