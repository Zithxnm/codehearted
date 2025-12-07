<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email - CodeHearted</title>
    @vite(['resources/css/Login_Signup_Styles.css'])
    <style>
        .verify-container {
            background-color: #fff;
            padding: 2rem;
            border: 2px solid #5a3100;
            border-radius: 10px;
            max-width: 500px;
            margin: 5rem auto;
            text-align: center;
            box-shadow: 5px 5px 0px rgba(90, 49, 0, 0.2);
        }
        .retro-text {
            font-family: 'Retro', sans-serif;
            color: #5a3100;
            margin-bottom: 1rem;
        }
        .glacial-text {
            font-family: 'Glacial', sans-serif;
            color: #555;
            line-height: 1.5;
            margin-bottom: 2rem;
        }

        .action-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 20px;
            background-color: #ef8a34;
            color: white;
            text-decoration: none;
            font-family: 'Retro', sans-serif;
            font-size: 0.9rem;

            border: none;
            cursor: pointer;

            box-shadow:
                0px 4px #e95e16,
                0px -4px #e95e16,
                4px 0px #e95e16,
                -4px 0px #e95e16,
                0px 8px #00000038,
                4px 4px #00000038,
                -4px 4px #00000038,
                inset 0px 4px #ffffff36;
            transition: transform 0.1s;
            shape-rendering: crispEdges;
        }

        .action-btn:active {
            transform: translateY(4px);
            box-shadow:
                0px 4px black,
                0px -4px black,
                4px 0px black,
                -4px 0px black,
                inset 0px 4px #00000038;
        }

        .action-btn:hover {
            background: hsl(18, 89%, 55%);
            transform: translateY(-1px);
            box-shadow:
                0px 4px #e95e16,
                0px -4px #e95e16,
                4px 0px #e95e16,
                -4px 0px #e95e16,
                0px 8px #00000038,
                4px 4px #00000038,
                -4px 4px #00000038,
                inset 0px 4px #ffffff36;
        }
    </style>
</head>
<body style="background-color: #fff8f0;">

<div class="verify-container">
    <img src="{{ asset('imgs/CodeHearted_Logo.png') }}" alt="Logo" style="max-width: 150px; margin-bottom: 20px;">

    <h2 class="retro-text">Verify Your Email</h2>

    <p class="glacial-text">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
    </p>

    @if (session('success'))
        <div style="color: green; font-family: 'Glacial'; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="action-btn">
            Resend Verification Email
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
        @csrf
        <button type="submit" style="background:none; border:none; color: #5a3100; text-decoration: underline; cursor: pointer; font-family: 'Glacial';">
            Logout
        </button>
    </form>
</div>

</body>
</html>
