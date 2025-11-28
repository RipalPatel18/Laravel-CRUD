@extends('layouts.admin')

@section('content')
<h1>Course Details</h1>

<p><strong>Name:</strong> {{ $course->courseName }}</p>
<p><strong>Code:</strong> {{ $course->courseID }}</p>
<p><strong>Description:</strong> {{ $course->description }}</p>
@endsection
