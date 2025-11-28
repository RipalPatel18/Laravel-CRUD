<h1>Edit Course</h1>

<form action="{{ route('courses.update', $course->id) }}" method="POST">

    @csrf
    @method('PUT')
    
    Course Name: <input type="text" name="courseName" value="{{ $course->courseName }}"><br>
    Course ID: <input type="text" name="courseID" value="{{ $course->courseID }}"><br>
    Description: <textarea name="description">{{ $course->description }}</textarea><br>
    
    <button type="submit">Update</button>
</form>
