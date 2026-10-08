<!DOCTYPE html>
<html>
<head>
    <title>Edit Appointment</title>
</head>
<body>

    <h1>Edit Appointment</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('appointments.update', $appointment) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Patient:</label><br>
        <select name="patient_id">
            @foreach($patients as $patient)
                <option value="{{ $patient->id }}"
                    {{ $appointment->patient_id == $patient->id ? 'selected' : '' }}>
                    {{ $patient->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Doctor:</label><br>
        <select name="doctor_id">
            @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}"
                    {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>
                    {{ $doctor->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Appointment Date:</label><br>
        <input type="date"
               name="appointment_date"
               value="{{ $appointment->appointment_date }}">

        <br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="Pending" {{ $appointment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Confirmed" {{ $appointment->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="Completed" {{ $appointment->status == 'Completed' ? 'selected' : '' }}>Completed</option>
            <option value="Cancelled" {{ $appointment->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>

        <br><br>

        <button type="submit">Update Appointment</button>
    </form>

    <br>

    <a href="{{ route('appointments.index') }}">Back to Appointments</a>

</body>
</html>
