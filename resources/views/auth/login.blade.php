<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2 style="text-align: center;">Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <table style="margin: 50px auto">
            <tr>
                <td>username</td>
                <td><input type="text" name="username" required autofocus></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                <p>Belum Punya Akun?
                    <a href="{{ route('register.form') }}">Daftar di sini</a>
                </p>
                <button type="submit">Login</button>
                </td>
            </tr>
        </table>
</form>
</body>
</html>