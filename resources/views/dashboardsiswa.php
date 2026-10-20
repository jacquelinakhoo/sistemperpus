<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Siswa</title>
</head>
<body>

    <h1>Dashboard Siswa</h1>
    <p>Selamat datang, {{ session('Username') }}</p>
    <p>Role: {{ session('Role') }}</p>

    <p><a href="/logout">Logout</a></p>

</body>
</html>