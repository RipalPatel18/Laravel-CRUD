@extends('layouts/admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-4">Student Profile</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $student->fname }} {{ $student->lname }}
                </h5>
                <p class="card-text">{{ $student->email }}</p>

                <hr>

                <h5>Enrolled Courses:</h5>

                @if($student->courses->count() > 0)
                    <ul>
                        @foreach($student->courses as $course)
                            <li>
                                {{ $course->courseName }} 
                                ({{ $course->courseID }})
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No courses assigned.</p>
                @endif

                <a href="{{ route('students.edit', $student->id) }}" class="card-link">Edit</a>
                <a href="{{ route('students.trash', $student->id) }}" class="card-link text-danger">Trash</a>

            </div>
        </div>
    </div>
</div>
@endsection
