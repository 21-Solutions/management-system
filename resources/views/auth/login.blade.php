<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Phone or Email</label>
                <input type="text" name="email" id="email" placeholder="Phone or Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="additional-links">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
                <a href="{{ route('register') }}">Create Account</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>


