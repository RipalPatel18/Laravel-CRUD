@extends('layouts.admin')

@section('content')
<h1>Students</h1>

<a href="{{ route('students.create') }}">Add Student</a>

<ul>
@foreach ($students as $student)
    <li>
        {{ $student->fname }} {{ $student->lname }} - {{ $student->email }}

        | <a href="{{ route('students.show', $student->id) }}">View</a>
        | <a href="{{ route('students.edit', $student->id) }}">Edit</a>

        <form action="{{ route('students.destroy', $student->id) }}" 
              method="POST" 
              style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
