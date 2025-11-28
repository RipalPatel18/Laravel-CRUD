<!DOCTYPE html>
<html>
<head>
    <title>LMS Lab</title>
</head>
<body>

<nav>
    <a href="{{ route('students.index') }}">Students</a> |
    <a href="{{ route('courses.index') }}">Courses</a>
</nav>

<hr>

@yield('content')

</body>
</html>
