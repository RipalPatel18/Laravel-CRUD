@extends('layouts/admin')

@section('content')
<div class="row mb-3">
    <div class="col d-flex justify-content-between align-items-center">
        <h1 class="display-4 mb-0">View all Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    </div>
</div>

<div class="row">
    @foreach($students as $student)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $student->fname }} {{ $student->lname }}
                    </h5>
                    <p class="card-text">{{ $student->email }}</p>
                    <a href="{{ route('students.show', $student->id) }}" class="card-link">View</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="card-link">Edit</a>
                    <a href="{{ route('students.trash', $student->id) }}" class="card-link text-danger">Trash</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
