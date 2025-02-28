<!DOCTYPE html>
<html>

<head>
    <title>Subscription Confirmation - {{ config('app.name') }}</title>
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

        .details {
            text-align: left;
            display: inline-block;
            margin-top: 20px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            width: 80%;
        }

        .details ul {
            list-style: none;
            padding: 0;
        }

        .details li {
            font-size: 16px;
            margin-bottom: 8px;
            color: #333;
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
        <h1>Subscription Confirmed!</h1>

        <!-- Message -->
        <p>Hello <strong>{{ $user->name }}</strong>,</p>
        <p>Thank you for purchasing a subscription. Below are your subscription details:</p>

        <!-- Subscription Details -->
        <div class="details">
            <ul>
                <li><strong>Plan:</strong> {{ $subscriptionDetails['plan_name'] }}</li>
                <li><strong>Price:</strong> {{ $subscriptionDetails['price'] }}</li>
                <li><strong>Duration:</strong> {{ $subscriptionDetails['duration'] }}</li>
            </ul>
        </div>

        <p>Enjoy your subscription and thank you for choosing <strong>{{ config('app.name') }}</strong>!</p>

        <!-- Footer -->
        <p class="footer">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</body>

</html>
