<?php

session_start();
//Destroy and stop the current session
session_destroy();
//Upon stopping the current session redirect to Login page 
header('location:../index.php');

?>