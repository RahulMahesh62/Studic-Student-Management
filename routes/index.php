<?php 
    require_once("./login.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="./routes/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./routes/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./routes/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./routes/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./routes/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./routes/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./routes/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./routes/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./routes/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./routes/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./routes/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./routes/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./routes/fav/favicon-16x16.png">
    <link rel="manifest" href="./routes/fav//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./routes/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Sign In</title>
</head>

<body>
    <header>
        <div id="logo">
            <img id="clglogo" src="./images/college_logo (1).png" alt="">
        </div>
        <nav>
            <a href="#"><button id="sign-in" class="btn">Sign In</button>
                <a href="./register/register.php"><button id="signup" class="btn">Register</button></a>
        </nav>
    </header>
    <main>
        <div class="left">
            <img id="canvas" src="../images/sin.png" alt="">
        </div>
        <div class="right">
            <div id="form">
                <h3>LOGIN</h3>
                <form action="" method="post">
                    <input type="text" name="email" id="textbox" placeholder="Email" required><br /><br />
                    <input type="password" name="password" id="pwdbox" class="btn" placeholder="Password" required><br />
                    <input type="submit" id="lgbtn" class="btn" value="Login" name="submit">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2020 Rahul Mahesh </p>
    </footer>
</body>

</html>