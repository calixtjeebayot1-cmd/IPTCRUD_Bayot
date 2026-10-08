<!DOCTYPE html>
<html>
<head>
    <title>Patients</title>
</head>
<body>

    <h1>Patients</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('patients.create') }}">Add Patient</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->student_id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->course }}</td>
                    <td>{{ $patient->year_level }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient) }}">View</a>
                        <a href="{{ route('patients.edit', $patient) }}">Edit</a>

                        <form action="{{ route('patients.destroy', $patient) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
