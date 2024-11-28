<!DOCTYPE html>
<html>
<head>
    <title>Welcome to {{ config('app.name') }}</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}!</h1>
    <p>Thank you for signing up at {{ config('app.name') }}.</p>
    <p>We're excited to have you on board!</p>
</body>
</html>
