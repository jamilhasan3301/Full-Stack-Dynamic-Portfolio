<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jamil hasan portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <nav class="navbar">
            <div class="logo">jamil</div>
            <p>
                home
            </p>
            <p>
                about
            </p>
            <p>
                service
            </p>
        </nav>
    <div>
        <h2>Hello, I'm<br>Jamil Hasan</h2>
        <div class="stats">
            <div>15%</div>
            <div>250+</div>
            <div>58</div>
        </div>
        <div class="about-me-buton" onclick="showtitle()">About me </div>
        <div class="about-me-buton" onclick="showtitle1()">home </div>
    </div>
    <div>
        <div><img src="{{asset('image\196415165.jpg')}}" alt="photo"></div>
        <script src="{{asset('assets\js\script.js')}}"></script>
</body>
</html>