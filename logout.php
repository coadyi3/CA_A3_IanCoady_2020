<?php

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("Cache-Control: private");


session_start();


if(@$_SESSION["username"]){

$_SESSION["username"] = false;

$_SESSION["password"] = false;

session_destroy();

}

header("location: login.php?logout=1");

?>