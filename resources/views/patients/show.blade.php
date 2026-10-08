<!DOCTYPE html>
<html>
<head>
    <title>Patient Details</title>
</head>
<body>

    <h1>Patient Details</h1>

    <p><strong>Student ID:</strong> {{ $patient->student_id }}</p>
    <p><strong>Name:</strong> {{ $patient->name }}</p>
    <p><strong>Course:</strong> {{ $patient->course }}</p>
    <p><strong>Year Level:</strong> {{ $patient->year_level }}</p>

    <br>

    <a href="{{ route('patients.edit', $patient) }}">Edit</a>
    |
    <a href="{{ route('patients.index') }}">Back to Patients</a>

</body>
</html>
