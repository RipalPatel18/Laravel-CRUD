@extends('layouts.admin')

@section('content')
<h1>Student Details</h1>

<p>First Name: {{ $student->fname }}</p>
<p>Last Name: {{ $student->lname }}</p>
<p>Email: {{ $student->email }}</p>
@endsection
