<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        .footer {
            background-color: #f5f5f5;
            color: #666;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>{{ $subject }}</h1>
    </div>
    <div class="content">
        <p>{{ $greeting }},</p>
        <p>{{ $body }}</p>
        {{--        @if(isset($actionText) && isset($actionUrl))--}}
        {{--            <div style="margin-top: 30px;">--}}
        {{--                <a href="{{ $actionUrl }}" style="background-color: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">{{ $actionText }}</a>--}}
        {{--            </div>--}}
        {{--        @endif--}}
    </div>
    <div class="footer">
        <p>Thank you,<br>{{ $name }}</p>
    </div>
</div>
</body>
</html>
