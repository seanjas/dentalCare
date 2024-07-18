<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        h2 {
            color: #555;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
        }
        table td {
            background-color: #fff;
        }
        .section {
            margin-top: 30px;
        }
        .section-title {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            margin-bottom: 10px;
        }
        .section-content {
            padding: 15px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Generated Report</h1>

        <div class="section">
            <div class="section-title">Summary</div>
            <div class="section-content">
                <p><strong>Date:</strong> July 11, 2024</p>
                <p><strong>Generated by:</strong> John Doe</p>
                <p><strong>Description:</strong> This is a sample generated report.</p>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Data Table</div>
            <div class="section-content">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Medicine</th>
                            <th>Medicine_Added</th>
                            <th>Patient</th>
                            <th>Doctor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ( $medicine as $medicines)
                            <td> {{$medicines->id}} </td>
                            @endforeach
                            @foreach ( $medicine as $medicines)
                            <td value="{{$medicines->id}}"> {{$medicines->name}} </td>
                            @endforeach
                            @foreach ( $medicine as $medicines)
                            <td value="{{$medicines->id}}"> {{$medicines->date_added}} </td>
                            @endforeach
                            @foreach ( $patient as $patients)
                            <td value="{{$patients->id}}"> {{$patients->name}} </td>
                            @endforeach
                            @foreach ( $doctor as $doctors)
                            <td value="{{$doctors->id}}"> {{$doctors->name}} </td>
                            @endforeach
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Charts</div>
            <div class="section-content">
                <!-- Placeholder for charts or graphs -->
                <p>Charts/graphs can be embedded here.</p>
            </div>
        </div>

        {{-- <div class="section">
            <div class="section-title">Conclusion</div>
            <div class="section-content">
                <p>This concludes the generated report example.</p>
            </div>
        </div> --}}

    </div>
</body>
</html>
