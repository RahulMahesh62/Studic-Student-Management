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
        $sql = "CREATE TABLE IF NOT EXISTS dashb(id INT(10) NOT NULL PRIMARY KEY, sname VARCHAR(25) NOT NULL, semester VARCHAR(25), department VARCHAR(25))";

        if(mysqli_query($con,$sql)) {
            return $con;
        } else {
            echo "Cannot create table";
        }

    } else {
        echo "DB not created" . mysqli_error($con);
    }
}
