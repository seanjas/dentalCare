<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="css/appointment.css">
    <style>
        /* Styles for button */
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Additional styles as needed */
    </style>
</head>
<body>
    <div class="container">
        <div class="text">
           Appointment Form
        </div>
        <form action="{{ url('add_appointment') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    {{-- <select name="doctor" required>
                        <option value="" disabled selected>Select Doctor</option>
                        @foreach ($doctor as $doctors)
                        <option value="{{ $doctors->doctor_id }}">{{ $doctors->name }}</option>
                        @endforeach
                    </select> --}}
                    <div class="input-data">
                        <input type="text" required autocomplete="doctor_name" name="doctor_name">
                        <div class="underline"></div>
                        <label for="">Doctor Name</label>
                    </div>
                    {{-- <div class="underline"></div>
                    <label for="">Doctor</label> --}}
                </div>
                <div class="input-data">
                    <select name="service" required>
                        <option value="" disabled selected>Select Service</option>
                        <option value="Diagnostic">Diagnostic</option>
                        <option value="Treatment">Treatment</option>
                    </select>
                    <div class="underline"></div>
                    <label for="">Service</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    {{-- <select name="patient" required>
                        <option value="" disabled selected>Select Patient</option>
                    @foreach ($patient as $patients)
                        <option value="{{$patients->patient_id}}"> {{$patients->name}} </option>
                    @endforeach

                    </select>
                    <div class="underline"></div>
                    <label for="">Patient</label> --}}
                    <div class="input-data">
                        <input type="text" required autocomplete="patient_name" name="patient_name">
                        <div class="underline"></div>
                        <label for="">Patient Name</label>
                    </div>
                </div>
                <div class="input-data">
                    <input type="date" name="date" required>
                    <div class="underline"></div>
                    <label for="">Appointment Date</label>
                </div>
                <div class="input-data">
                    <input type="time" name="time" required>
                    <div class="underline"></div>
                    <label for="">Appointment Time</label>
                </div>
            </div>
            <div>
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
