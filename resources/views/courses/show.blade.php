@extends('layouts/admin')

@section('content')
<h1 class="display-4">{{ $course->courseName }}</h1>

<p><strong>Course Code:</strong> {{ $course->courseID }}</p>
<p><strong>Description:</strong> {{ $course->description }}</p>

<hr>


<h4>Professor</h4>
@if($course->professor)
    <p>{{ $course->professor->name }} ({{ $course->professor->email }})</p>
@else
    <p class="text-muted">No professor assigned.</p>
@endif

<hr>

<h4>Enrolled Students</h4>
@if($course->students->count() > 0)
    <ul>
        @foreach($course->students as $student)
            <li>
                {{ $student->fname }} {{ $student->lname }}
                ({{ $student->email }})
            </li>
        @endforeach
    </ul>
@else
    <p class="text-muted">No students enrolled in this course.</p>
@endif

<hr>

<a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
<a href="{{ route('courses.trash', $course->id) }}" class="btn btn-danger">Trash</a>
@endsection
