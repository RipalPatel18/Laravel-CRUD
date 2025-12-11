@extends('layouts/admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-4">Add a Student Profile</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input
                    type="text"
                    class="form-control @error('fname') is-invalid @enderror"
                    id="fname"
                    name="fname"
                    value="{{ old('fname') }}"
                >
                @error('fname')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input
                    type="text"
                    class="form-control @error('lname') is-invalid @enderror"
                    id="lname"
                    name="lname"
                    value="{{ old('lname') }}"
                >
                @error('lname')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                >
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
                        <label for="courses">Select Courses:</label>
                <select name="courses[]" id="courses" class="form-control" multiple>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">
                            {{ $course->courseName }} ({{ $course->courseID }})
                        </option>
                    @endforeach
                </select>


</select>

</div>
  
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
