@extends('layouts/admin')

@section('content')
<h1>Add Course</h1>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Course Name</label>
        <input type="text" name="courseName" class="form-control" value="{{ old('courseName') }}">
    </div>

    <div class="mb-3">
        <label>Course ID</label>
        <input type="text" name="courseID" class="form-control" value="{{ old('courseID') }}">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">Submit</button>
</form>
@endsection
