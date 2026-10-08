<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
</head>
<body>

    <h1>Edit Patient</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('patients.update', $patient) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Student ID:</label><br>
        <input type="text" name="student_id" value="{{ old('student_id', $patient->student_id) }}">
        <br><br>

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $patient->name) }}">
        <br><br>

        <label>Course:</label><br>
        <input type="text" name="course" value="{{ old('course', $patient->course) }}">
        <br><br>

        <label>Year Level:</label><br>
        <input type="number" name="year_level" value="{{ old('year_level', $patient->year_level) }}">
        <br><br>

        <button type="submit">Update Patient</button>
    </form>

    <br>

    <a href="{{ route('patients.index') }}">Back to Patients</a>

</body>
</html>
