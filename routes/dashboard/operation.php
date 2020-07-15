<?php

require_once ("db.php");

$con = Createdb();

// create button click
if(isset($_POST['add'])){
    createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

// if(isset($_POST['delete'])){
//     deleteRecord();
// }

// if(isset($_POST['deleteall'])){
//     deleteAll();

// }

function createData(){
    $sid = textboxValue("id");
    $sname = textboxValue("name");
    $ssem = textboxValue("semester");
    $sdept = textboxValue("dept");

    if($sid && $sname && $ssem && $sdept){

        $sql = "INSERT INTO dashb (id, sname, semester, department) 
                        VALUES ('$sid','$sname','$ssem','$sdept')";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Record Successfully Inserted...!");
        }else{
            echo "Error";
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

//Display in table from database
function getData() {
    $sql = "SELECT * FROM dashb";
    $result = mysqli_query($GLOBALS['con'], $sql);
    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

function UpdateData(){
    $id = textboxValue("id");
    $sname = textboxValue("name");
    $semester = textboxValue("semester");
    $department = textboxValue("dept");

    if($id && $name && $semester && $department){
        $sql = "
                    UPDATE dashb SET sname='$sname', semester = '$semester', department = '$department' WHERE id='$id';                    
        ";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Data Successfully Updated");
        }else{
            TextNode("error", "Enable to Update Data");
        }

    }else{
        TextNode("error", "Select Data Using Edit Icon");
    }


}