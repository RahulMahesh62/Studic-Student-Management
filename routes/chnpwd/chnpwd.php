<?php 
    session_start();
    require_once("./changepwd.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
#textbox {
    padding: 9px 25px;
    margin-top: 50px;
    margin: 45px 385px 20px  385px;
    background-color: white;
    border: #0984e3 2px solid;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    font-weight: 500;
    font-size: 16px;
    color: black;
    text-decoration: none;
    width: 30%;
    height: 12%;
    outline: none;
    box-shadow: none;
}

#pwdbox {
    padding: 9px 25px;
    margin: 10px 385px;
    background-color: white;
    border: #0984e3 2px solid;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    font-weight: 500;
    font-size: 16px;
    color: gray;
    text-decoration: none;
    width: 30%;
    height: 12%;
    outline: none;
    box-shadow: none;
}

.btn {
    margin: 17px;
    padding: 9px 25px;
    background-color: #b33939;
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

#lgbtn {
    margin: 30px 450px;
    width: 20%;
    height: 10%;
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
                <li><a class="nav-link" href="#">Change Password</a></li>
                <li><a class="nav-link" href="../lgout/lgout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <section class="main-section" id="about">
                <h1>Change Password</h1><br/>
                <form action="" method="post">
                    <input type="email" name="email" id="textbox" placeholder="Enter Email" required><br /><br />
                    <input type="password" name="password" id="pwdbox" class="btn" placeholder="Enter current Password" required><br />
                    <input type="password" name="npassword" id="pwdbox" class="btn" placeholder="Enter new Password" required><br />
                    <input type="submit" id="lgbtn" class="btn" value="Change Password" name="submit">
                </form>
            </section>
        </div>
    </main>
    <div id="footer">
        <p class="fcontent1">&nbsp;&nbsp;Developed by : <a target="_blank" href="http://rahulmahesh.netlify.com">Rahul&nbsp;Mahesh</a>&nbsp;&nbsp;&nbsp;Mail ID : <a target="_blank" href="mailto:rahulmahesh62@gmail.com">rahulmahesh62@gmail.com</a></p>
    </div>
</body>

</html>