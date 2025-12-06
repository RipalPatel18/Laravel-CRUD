@extends('layouts/admin')

@section('content')
<h1 class="mb-3">All Professors</h1>

<a href="{{ route('professors.create') }}" class="btn btn-primary mb-3">Add Professor</a>

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>

    @foreach($professors as $professor)
    <tr>
        <td>{{ $professor->name }}</td>
        <td>
            <a href="{{ route('professors.edit', $professor->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('professors.destroy', $professor->id) }}"
                  method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
