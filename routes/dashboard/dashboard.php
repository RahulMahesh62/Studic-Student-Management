<?php 
    require_once("./operation.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashstyle.css">
    <link rel="stylesheet" href="./style.css">
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
    <script src="https://kit.fontawesome.com/ae34812808.js" crossorigin="anonymous"></script>
    <title>COMPUTER SCIENCE DEPARTMENT</title>
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
                <li><a class="nav-link" href="#">Dashboard</a></li>
                <li><a class="nav-link" href="../chnpwd/chnpwd.php">Change Password</a></li>
                <li><a class="nav-link" href="../lgout/lgout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Dashboard</h1>
            <div class="flex">
            <div id="error"></div>
                <form action="" method="post" id="form">
                    <input type="text" name="id" class="id" placeholder="Enter ID" id="input"><br><br>
                    <input type="text" name="name" placeholder="Enter Name" class="name" id="input"><br><br>
                    <input type="text" name="semester" placeholder="Enter Semester" id="input" class="semester"><br><br>
                    <input type="text" name="dept" placeholder="Enter Department" id="input" class="dept"><br><br>
                    <button value="Add" id="submit" name="add" class="button">Add</button>
                    <button value="View" id="submit" name="view">View</button>
                    <button value="Update" id="submit" name="update" class="button">Update</button>
                    <button value="Delete" id="submit" name="delete">Delete</button>
                </form>
            </div>
            <div class="table">
                <table class="tftable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Semester</th>
                            <th>Department</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php
                            if(isset($_POST['view'])){
                                $result = getData();
                            if($result){
                                while ($row = mysqli_fetch_assoc($result)){
                         ?>
                        <tr>
                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['sname']; ?></td>
                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['semester']; ?></td>
                            <td data-id="<?php echo $row['id']; ?>"><?php echo $row['department']; ?></td>
                            <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                        </tr>
                        <?php 
                                     }
                                 }
                            }
                         ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <div id="footer">
        <p class="fcontent1">&nbsp;&nbsp;Developed by : <a target="_blank"
                href="http://rahulmahesh.netlify.com">Rahul&nbsp;Mahesh</a>&nbsp;&nbsp;&nbsp;Mail ID : <a
                target="_blank" href="mailto:rahulmahesh62@gmail.com">rahulmahesh62@gmail.com</a></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>
    <script src="./script.js"></script>
</body>

</html>