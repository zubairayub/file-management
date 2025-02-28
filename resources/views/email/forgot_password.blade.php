<!DOCTYPE html>
<html>

<head>
    <title>Password Reset - {{ config('app.name') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }

        .btn {
            display: inline-block;
            background: #007bff;
            color: #ffffff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
        }

        .btn:hover {
            background: #0056b3;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Logo -->
        <img src="{{ asset('img/logo-h-1.png') }}" alt="{{ config('app.name') }}" class="logo">

        <!-- Greeting -->
        <h1>Password Reset Request</h1>

        <!-- Message -->
        <p>Hello <strong>{{ $user->name }}</strong>,</p>
        <p>We received a request to reset your password for your <strong>{{ config('app.name') }}</strong> account.</p>

        <!-- Reset Password Button -->
        <a href="{{ $resetLink }}" class="btn">Reset Password</a>

        <p>If you didn’t request this, please ignore this email. Your password will remain unchanged.</p>

        <!-- Footer -->
        <p class="footer">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</body>

</html>
