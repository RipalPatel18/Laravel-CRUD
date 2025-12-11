@extends('layouts/admin')

@section('content')
<h1>Edit Course</h1>

<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Course Name</label>
        <input type="text" name="courseName" class="form-control" value="{{ $course->courseName }}">
    </div>

    <div class="mb-3">
        <label>Course ID</label>
        <input type="text" name="courseID" class="form-control" value="{{ $course->courseID }}">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $course->description }}</textarea>
    </div>


  <div class="mb-3">
    <label for="courses">Select Courses</label>
<select name="courses[]" id="courses" multiple>
    @foreach ($courses as $course)
        <option value="{{ $course->id }}"
            @if($student->courses->contains($course->id)) selected @endif>
            {{ $course->courseName }} ({{ $course->courseID }})
        </option>
    @endforeach
</select>
   </div>

  <div class="mb-3">
<label>Professor:</label>
<select name="professor_id">
    <option value="">-- Select --</option>
    @foreach(App\Models\Professor::all() as $professor)
        <option value="{{ $professor->id }}"
            {{ $course->professor_id == $professor->id ? 'selected' : '' }}>
            {{ $professor->name }}
        </option>
    @endforeach
</select>
   </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection
