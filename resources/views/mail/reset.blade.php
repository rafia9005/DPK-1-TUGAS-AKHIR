<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body>
    <p>Hello!!..</p>
    <p>Anda telah mendapatkan link untuk reset password di account anda.</p>
    <a href="{{ $resetUrl }}" target="_blank" style="display: inline-block; padding: 10px 15px; background-color: #3490dc; color: #ffffff; text-decoration: none; border-radius: 5px;">Reset Password</a>
    <p>
        If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:
        <br>
        <a href="{{ $resetUrl }}" target="_blank">{{ $resetUrl }}</a>
    </p>
    <p>link reset password ini akan expire dalam {{ $expires }} minutes.</p>
    <p>If you did not request a password reset, please ignore this email.</p>
    <p>Thank you!</p>
</body>
</html>
