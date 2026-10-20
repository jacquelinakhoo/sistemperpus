<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
</head>
<body>
    <h1>Register</h1>

    <form action="/register" method="post">
        @csrf
        Username:<br>
        <input type="text" name="Username"><br>
        Password:<br>
        <input type="password" name="Password"><br>
        Email:<br>
        <input type="email" name="EmailUser"><br>
        Gender:<br>
        <input type="radio" name="Gender" value="Laki-laki">Laki-laki
        <input type="radio" name="Gender" value="Perempuan">Perempuan<br>

        <input type="submit" value="Register">
    </form>

    <a href="/">Back to login</a>
</body>
</html>