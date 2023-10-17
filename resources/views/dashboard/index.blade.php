<!DOCTYPE html>
<html>
<head>
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="sidebar">
        <h2>Teacher Dashboard</h2>
        <ul>
            @foreach($students as $student)
            <li>
                <span class="student-name">{{ $student->name }}</span>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="content">
        <!-- Main content goes here -->
    </div>

    <style>
        /*  desired CSS styles for the sidebar and content */
        .sidebar {
            /* Sidebar styles */
        }

        .content {
            /* Content area styles */
        }
    </style>
</body>
