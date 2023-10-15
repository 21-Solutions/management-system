<!DOCTYPE html>
<html>
<head>
    <title>Student Management Portal</title>

    <style>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    nav {
        width: 100%;
        background-color: #f5f5f5;
        padding: 10px 0;
    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .logo-container {
        display: flex;
        align-items: center;
    }

    .company-logo {
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    .company-name {
        font-weight: bold;
        font-size: 20px;
        color: #333;
        text-decoration: none;
    }

    .right {
        display: flex;
        justify-content: flex-end;
        gap: 20px;
    }

    .right a {
        color: #333;
        text-decoration: none;
    }

    .right a:hover {
        text-decoration: underline;
    }

    .content {
        margin-top: 20px;
    }
</style>

<body>
    <nav>
        <div class="container">
            <div class="logo-container">
                <a href="{{ route('welcome') }}"><img src="{{ asset('images/1.png') }}" alt="Company Logo" class="company-logo"></a>
                <a href="{{ route('welcome') }}" class="company-name">Jubari</a>
            </div>
            <div class="right">
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
