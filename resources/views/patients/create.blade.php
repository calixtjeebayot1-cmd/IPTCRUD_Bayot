<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
</head>
<body>

    <h1>Add Patient</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf

        <label>Student ID:</label><br>
        <input type="text" name="student_id" value="{{ old('student_id') }}">
        <br><br>

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>

        <label>Course:</label><br>
        <input type="text" name="course" value="{{ old('course') }}">
        <br><br>

        <label>Year Level:</label><br>
        <input type="number" name="year_level" value="{{ old('year_level') }}">
        <br><br>

        <button type="submit">Save Patient</button>
    </form>

    <br>

    <a href="{{ route('patients.index') }}">Back to Patients</a>

</body>
</html>
