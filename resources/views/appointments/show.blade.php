<!DOCTYPE html>
<html>
<head>
    <title>Appointment Details</title>
</head>
<body>

    <h1>Appointment Details</h1>

    <p><strong>Patient:</strong> {{ $appointment->patient->name ?? 'N/A' }}</p>
    <p><strong>Doctor:</strong> {{ $appointment->doctor->name ?? 'N/A' }}</p>
    <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
    <p><strong>Status:</strong> {{ $appointment->status }}</p>

    <br>

    <a href="{{ route('appointments.edit', $appointment) }}">Edit</a>
    |
    <a href="{{ route('appointments.index') }}">Back to Appointments</a>

</body>
</html>
