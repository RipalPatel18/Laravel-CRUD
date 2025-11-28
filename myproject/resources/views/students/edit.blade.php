@extends('layouts.admin')

@section('content')
<h1>Edit Student</h1>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>First Name:</label><br>
    <input type="text" name="fname" value="{{ $student->fname }}"><br><br>

    <label>Last Name:</label><br>
    <input type="text" name="lname" value="{{ $student->lname }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ $student->email }}"><br><br>

    <button type="submit">Update</button>
</form>
@endsection
