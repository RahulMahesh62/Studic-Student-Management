<?php 
    require_once("./operation.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="./fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Register Here</title>
</head>

<body>
    <header>
        <div id="logo">
            <img id="clglogo" src="../images/college_logo (1).png" alt="">
        </div>
        <nav>
            <a href="../index.php"><button id="sign-in" class="btn">Sign In</button>
                <a href="#"><button id="signup" class="btn">Register</button></a>
        </nav>
    </header>
    <main>
        <div class="left">
            <img id="canvas" src="./reg.png" alt="">
        </div>
        <div class="right">
            <div id="form">
                <h3>REGISTER HERE</h3>
                <div id="error"></div>
                <form action="" method="post" id="form">
                    <input type="text" name="username" id="textbox" class="username" placeholder="Username" required><br /><br />
                    <input type="email" name="email" id="textbox" placeholder="Email" class="email" required><br /><br />
                    <input type="password" name="password" id="pwdbox" class="btn pwd" placeholder="Password" required><br />
                    <input type="submit" id="lgbtn" class="btn" value="Register" name="submit">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2020 Rahul Mahesh </p>
    </footer>
    <script src="./script.js"></script>
</body>

</html>