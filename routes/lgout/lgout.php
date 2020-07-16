<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../lgout.css">
    <link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Muli&display=swap" rel="stylesheet">
    <title>COMPUTER SCIENCE DEPARTMENT</title>
    <style>
        .btng {
            margin: 100px 500px;
            text-align: center;
            padding: 9px 25px;
            background-color: #0984e3;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
            font-weight: 500;
            font-size: 16px;
            color: #edf0f1;
            text-decoration: none;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            -o-border-radius: 50px;
        }
    </style>
</head>

<body>
    <div class="banner">
        <div class="logo">
            <img src="../images/cl.png" alt="College Logo" class="responsive">
        </div>
        <div class="heading">
            <p class="fh">Dept. Of Computer Science</p>
            <p class="sh">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College Of Engineering, Cherthala</p>
        </div>
    </div>
    <main>
        <div id="left_menu">
            <ul class="nav-links">
                <li><a class="nav-link" href="../menu.php">Home</a></li>
                <li><a class="nav-link" href="../dashboard/dashboard.php">Dashboard</a></li>
                <li><a class="nav-link" href="../chnpwd/chnpwd.php">Change Password</a></li>
                <li><a class="nav-link" href="#">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <section class="main-section" id="about">
                <h1>Logout Screen</h1><br/>
                <h3 align="center">Are you sure you want to log out ???</h3>
                <a href="./logout.php"><button class="btng">Logout</button></a>
            </section>
        </div>
    </main>
    <div id="footer">
        <p class="fcontent1">&nbsp;&nbsp;Developed by : <a target="_blank" href="http://rahulmahesh.netlify.com">Rahul&nbsp;Mahesh</a>&nbsp;&nbsp;&nbsp;Mail ID : <a target="_blank" href="mailto:rahulmahesh62@gmail.com">rahulmahesh62@gmail.com</a></p>
    </div>
</body>

</html>