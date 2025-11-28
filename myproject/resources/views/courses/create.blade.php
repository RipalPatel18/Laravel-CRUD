@extends('layouts.admin')

@section('content')
<h1>Add Course</h1>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf

    <label>Course Name:</label><br>
    <input type="text" name="courseName"><br><br>

    <label>Course ID:</label><br>
    <input type="text" name="courseID"><br><br>

    <label>Description:</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Save</button>
</form>
@endsection
