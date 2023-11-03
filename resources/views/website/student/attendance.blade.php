@extends('website.layouts.tutor')

@section('content')
    <h1>Attendance</h1>

    <table class="attendance-table">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>
                        <input type="date" name="attendance_date" class="attendance-date" onchange="updateAttendanceStatus(this)">
                    </td>
                    <td id="attendance-status-{{ $student->id }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function updateAttendanceStatus(input) {
            var selectedDate = input.value;
            var attendanceStatusCell = input.parentNode.nextElementSibling;
            attendanceStatusCell.textContent = getAttendanceStatus(selectedDate);
        }

        function getAttendanceStatus(date) {
            // Here you can implement the logic to determine the attendance status based on the selected date.
            // You can retrieve the attendance status from the database or any other source.

            // For demonstration purposes, let's assume the attendance status is stored in an array.
            var attendanceStatuses = {
                '2023-10-01': 'Present',
                '2023-10-02': 'Absent',
                '2023-10-03': 'Present',
                // Add more date-attendance status pairs as needed.
            };

            return attendanceStatuses[date] || 'Not recorded';
        }
    </script>

    <style>
        .attendance-table {
            width: 100%;
            border-collapse: collapse;
        }

        .attendance-table th,
        .attendance-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        .attendance-table th {
            background-color: #f2f2f2;
        }
    </style>
@endsection
