@extends('layouts/admin')

@section('content')
<h1>Edit Course</h1>

<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Course Name</label>
        <input type="text" name="courseName" class="form-control" value="{{ $course->courseName }}">
    </div>

    <div class="mb-3">
        <label>Course ID</label>
        <input type="text" name="courseID" class="form-control" value="{{ $course->courseID }}">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $course->description }}</textarea>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection
