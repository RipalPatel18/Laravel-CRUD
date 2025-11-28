<h1>Add Course</h1>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    Course Name: <input type="text" name="courseName"><br>
    Course ID: <input type="text" name="courseID"><br>
    Description: <textarea name="description"></textarea><br>
    <button type="submit">Save</button>
</form>
