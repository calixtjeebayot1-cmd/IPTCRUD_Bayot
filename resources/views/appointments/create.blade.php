<!DOCTYPE html>
<html>
<head>
    <title>Add Appointment</title>
</head>
<body>

    <h1>Add Appointment</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <label>Patient:</label><br>
        <select name="patient_id">
            <option value="">Select Patient</option>
            @foreach($patients as $patient)
                <option value="{{ $patient->id }}">
                    {{ $patient->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Doctor:</label><br>
        <select name="doctor_id">
            <option value="">Select Doctor</option>
            @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">
                    {{ $doctor->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Appointment Date:</label><br>
        <input type="date" name="appointment_date">

        <br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="Confirmed">Confirmed</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select>

        <br><br>

        <button type="submit">Save Appointment</button>
    </form>

    <br>

    <a href="{{ route('appointments.index') }}">Back to Appointments</a>

</body>
</html>
