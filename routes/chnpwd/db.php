<?php

function Createdb() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dashb";

    //Create Connection
    $con = mysqli_connect($servername,$username,$password);

    //Check Connection
    if(!$con) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    //Create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con,$sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "CREATE TABLE IF NOT EXISTS login(username VARCHAR(25), email VARCHAR(25), pwd VARCHAR(25))";

        if(mysqli_query($con,$sql)) {
            return $con;
        } else {
            echo "Cannot create table";
        }

    } else {
        echo "DB not created" . mysqli_error($con);
    }
}
