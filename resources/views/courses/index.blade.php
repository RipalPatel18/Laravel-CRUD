<h1>All Courses</h1>

<a href="{{ route('courses.create') }}">Add Course</a>

<ul>
@foreach ($courses as $course)
    <li>
        {{ $course->courseName }} ({{ $course->courseID }})
       <a href="{{ route('courses.show', $course->id) }}">View</a>
<a href="{{ route('courses.edit', $course->id) }}">Edit</a>

<form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

    </li>
@endforeach
</ul>

@if($courses->count() === 0)
    <p>No courses found!</p>
@endif
