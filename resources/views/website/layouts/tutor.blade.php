<!DOCTYPE html>
<html>
<head>
    <title>Jubari</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            min-height: 100%;
        }
        .sidebar {
            width: 200px;
            background-color: #f1f1f1;
            padding: 20px;
        }
        .sidebar h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .sidebar a {
            display: flex; /* Added for aligning icon and text */
            align-items: center; /* Added for aligning icon and text */
            padding: 10px;
            margin-bottom: 10px;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar a:hover {
            background-color: #ddd;
            color: #000;
        }
        .sidebar a.active {
            background-color: #ddd;
            color: #000;
            font-weight: bold;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .user-profile {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
}
        .user-profile .avatar-container {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 10px;
        }
        .user-profile .avatar-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .user-profile input[type="file"] {
            display: none;
        }
        .user-profile label {
            cursor: pointer;
        }

        .change-picture-link {
            display: inline-block;
            padding: 8px 16px;
            background-color: #d6e6d7;
            color: #ffffff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
}

.change-picture-link:hover {
  background-color: #aeb3ae;
}

.change-picture-link:active {
  background-color: #cbd3cb;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="user-profile">
                <div class="avatar-container">
                    <img src="{{ asset('images/h.jpg') }}" alt="" id="">
                </div>
                <input type="file" id="avatar-input" accept="image/*">
                <label for="avatar-input" class="change-picture-link">Change Picture</label>
                <h2>User Name</h2>
            </div>
            <a href="/app/student/attendance">
                <i class="fas fa-calendar-check" style="margin-right: 10px;"></i>
                <span class="sidebar-link-text">Attendance</span>
            </a>
            <a href="/app/student/timetable">
                <i class="far fa-clock" style="margin-right: 10px;"></i>
                <span class="sidebar-link-text">Timetable</span>
            </a>
            <a href="/app/student/subjects">
                <i class="fas fa-book-open" style="margin-right: 10px;"></i>
                <span class="sidebar-link-text">Subjects</span>
            </a>
            <a href="/app/student/extra-activities">
                <i class="fas fa-globe" style="margin-right: 10px;"></i>
                <span class="sidebar-link-text">Extra Activities</span>
            </a>
            <a href="/app/student/overal-reports">
                <i class="fas fa-file-alt" style="margin-right: 10px;"></i>
                <span class="sidebar-link-text">Overall Reports</span>
            </a>
            <a href="/app/student/timed-reports">
                <i class="far fa-clock" style="margin-right: 10px;"></i>
                <span class="sidebar-link-text">Timed Reports</span>
            </a>
            <a href="/app/student/logout">
                <i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i>
                <span class="sidebar-link-text">Logout</span>
            </a>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous"></script>
    <script>
        const avatarInput = document.getElementById('avatar-input');
        const avatarImage = document.getElementById('avatar-image');
