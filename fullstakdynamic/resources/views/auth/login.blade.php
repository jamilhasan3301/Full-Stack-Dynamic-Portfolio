<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" placeholder="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" placeholder="password" name="password" required>
        </div>
        <button type="submit">Login</button>
</body>
</html>