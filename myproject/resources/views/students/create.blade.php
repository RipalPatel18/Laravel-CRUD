@extends('layouts.admin')

@section('content')
<h1>Add Student</h1>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <label>First Name:</label><br>
    <input type="text" name="fname"><br><br>

    <label>Last Name:</label><br>
    <input type="text" name="lname"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <button type="submit">Save</button>
</form>
@endsection
