<?php

require_once ("./db.php");

//Login the user upon login button click
if(isset($_POST['submit'])){
    loginUser();
}

function loginUser() {
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    if($email && $pwd){

        $sql = "select * from login where email = '$email' && pwd ='$pwd'";

        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result); 

        if($num == 1) {
            //Login Successful
            header('location:menu.php');
            TextNode("success", "Login Successful");
        } else {
            //Login Unsuccessful
            header('location:./register/register.php');
            TextNode("error", "Login Unsuccessful. Try again");
        }

    }else{
            //Check if input fields empty
            TextNode("error", "Provide Data in the Textbox");
    }
}

//Messages
function TextNode($classname,$msg) {
    $element = "<h5 class='$classname'>$msg</h5>";
    echo $element;
}










?>