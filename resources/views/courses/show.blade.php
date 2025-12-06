@extends('layouts/admin')

@section('content')
<h1>{{ $course->courseName }}</h1>

<p><strong>Course Code:</strong> {{ $course->courseID }}</p>
<p><strong>Description:</strong> {{ $course->description }}</p>

<a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
<a href="{{ route('courses.trash', $course->id) }}" class="btn btn-danger">Trash</a>
@endsection
