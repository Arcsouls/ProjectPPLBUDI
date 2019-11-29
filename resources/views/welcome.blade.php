<!DOCTYPE html>
<html>
<head>
        <style>
                body{
                    background-image:url(b/images/hutan.jpg);
                    background-size:cover;
                    background-attachment: fixed;
                }
            </style>

    <title>Welcome!</title>
    <link rel="shortcut icon" href="b/images/bksda.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="b/assets/css/styleWelcome.css">
<body>
    <header>
        <div class="main">
            <img src="b/images/bksda.png" style="width: 60px; padding-top: 25px;">
            <ul>
                <li><a href="{{ route('login') }}">LOGIN</a></li>
                <li><a href="{{ route('register') }}">REGISTER</a></li>
                
            </ul>
        </div>
        <div class="title">
            <h1>Selamat Datang di Website BKSDA Jember</h1>
        </div>
        <div class="text">
            <p class="txt">Mari Bergabung dan Permudah Urusanmu Disini</p>
        </div>
    </header>
</body>
</head>
</html>