<?php

require_once ("./db.php");

$con = Createdb();

// createData function call upton Submit button click
if(isset($_POST['submit'])){
    createData();
}

//function to Register users
function createData(){
    $uname = textboxValue("username");
    $email = textboxValue("email");
    $pwd = textboxValue("password");

    if($uname && $email && $pwd){

        $sql = "INSERT INTO login (username, email, pwd) 
                        VALUES ('$uname','$email','$pwd')";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Record Successfully Inserted...!");
        }else{
            echo "Error";
        }

    }else{
            //Check if input fields empty
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

