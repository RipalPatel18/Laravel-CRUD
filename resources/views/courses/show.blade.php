<h1>{{ $course->courseName }}</h1>
<p>{{ $course->courseID }}</p>
<p>{{ $course->description }}</p>

<a href="{{ route('courses.index') }}">Back</a>
