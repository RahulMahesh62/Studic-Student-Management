<?php

require_once ("./db.php");

$con = Createdb();

//Call changePassword function upon Submit button click
if(isset($_POST['submit'])){
    changePassword();
}

//Function to change password
function changePassword(){
    $email = textboxValue("email");
    $pwd = textboxValue("password");
    $npwd = textboxValue("npassword");

    if($email && $pwd&& $npwd){

        $sql = "select email,pwd from login where email = '$email' and pwd = '$pwd'";
        $query = mysqli_query($GLOBALS['con'], $sql);
        $num = mysqli_fetch_array($query);

        if($num > 0) {

            $con = mysqli_query($GLOBALS['con'], "update login set pwd = '$npwd' where email = '$email'");
            $_SESSION['msg1'] = "Password change successful";
        } else {
            $_SESSION['msg1'] = "Password change unsuccessful";
        }

    }else{
            TextNode("error", "Provide Data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


//Messages
function TextNode($classname,$msg) {
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}

