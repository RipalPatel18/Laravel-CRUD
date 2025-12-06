@extends('layouts/admin')

@section('content')
<h1>Edit Professor</h1>

<form action="{{ route('professors.update', $professor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Professor Name</label>
        <input type="text" name="name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ $professor->name }}">

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection
