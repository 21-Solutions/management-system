<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="student_first_name">Student's First Name</label>
                <input type="text" id="student_first_name" name="student_first_name" required>
            </div>

            <div>
                <label for="student_last_name">Student's Last Name</label>
                <input type="text" id="student_last_name" name="student_last_name" required>
            </div>

            <div>
                <label for="student_id">Student's ID</label>
                <input type="text" id="student_id" name="student_id">
            </div>

            <div>
                <label for="subject">Student's Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div>
                <label for="parent_first_name">Parent's First Name</label>
                <input type="text" id="parent_first_name" name="parent_first_name" required>
            </div>

            <div>
                <label for="parent_phone">Parent's Phone Number</label>
                <input type="tel" id="parent_phone" name="parent_phone" required>
            </div>

            <div>
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                <span id="password_error" class="error"></span>
            </div>

            <button type="submit" id="register_button" disabled>Register</button>
        </form>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const registerButton = document.getElementById('register_button');
        const passwordError = document.getElementById('password_error');

        confirmPasswordInput.addEventListener('input', validatePasswordMatch);
        passwordInput.addEventListener('input', validatePasswordLength);

        function validatePasswordMatch() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (password !== confirmPassword) {
                passwordError.textContent = "Passwords do not match";
                registerButton.disabled = true;
            } else {
                passwordError.textContent = "";
                registerButton.disabled = false;
            }
        }

        function validatePasswordLength() {
            const password = passwordInput.value;

            if (password.length < 8) {
                passwordInput.setCustomValidity("Password must be at least 8 characters long");
                registerButton.disabled = true;
            } else {
                passwordInput.setCustomValidity("");
                registerButton.disabled = false;
            }
        }
    </script>
</body>
</html>
