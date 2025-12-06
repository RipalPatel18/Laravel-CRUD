@extends('layouts/admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-4">Update Student Profile</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

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
                    value="{{ old('fname', $student->fname) }}"
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
                    value="{{ old('lname', $student->lname) }}"
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
                    value="{{ old('email', $student->email) }}"
                >
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
