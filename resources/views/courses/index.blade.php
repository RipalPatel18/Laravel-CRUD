@extends('layouts/admin')

@section('content')
<div class="row mb-3">
    <div class="col d-flex justify-content-between align-items-center">
        <h1 class="display-4">All Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
    </div>
</div>

@if($courses->count() == 0)
    <div class="alert alert-warning">No courses found!</div>
@endif

<div class="row">
@foreach($courses as $course)
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $course->courseName }}</h5>
                <p class="card-text">{{ $course->courseID }}</p>

                <a href="{{ route('courses.show', $course->id) }}" class="card-link">View</a>
                <a href="{{ route('courses.edit', $course->id) }}" class="card-link">Edit</a>
                <a href="{{ route('courses.trash', $course->id) }}" class="card-link text-danger">Trash</a>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection
