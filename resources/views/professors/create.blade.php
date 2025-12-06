@extends('layouts/admin')

@section('content')
<h1>Add Professor</h1>

<form action="{{ route('professors.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Professor Name</label>
        <input type="text" name="name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name') }}">

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-success">Submit</button>
</form>
@endsection
