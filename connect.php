<?php
//ref: https://www.w3schools.com/php/php_mysql_create.asp

$db = "CarClub";
$conn = new mysqli('localhost','root','');
$sql = "CREATE DATABASE IF NOT EXISTS " . $db;
if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$connection = mysqli_connect('localhost', 'root', '', $db);
if (!$connection){
    die("Database Connection Failed" . mysqli_error());
}
$tableQuery = "CREATE TABLE IF NOT EXISTS `Vehicles`(
                        id      int(6) AUTO_INCREMENT PRIMARY KEY ,
                        make    varchar(25) null,
                        purType varchar(25) null,
                        model   varchar(25) null, 
                        colour  varchar(25) null,  
                        type    varchar(25) null, 
                        doors   varchar(25) null, 
                        engine  varchar(25) null, 
                        fuel    varchar(25) null, 
                        phone   varchar(25) null,
                        email   varchar(25) null
                        )";

$createTable = mysqli_query($connection, $tableQuery);

$tableQuery = "CREATE TABLE IF NOT EXISTS `admin`(
                        adminID int(6) AUTO_INCREMENT PRIMARY KEY,
                        username varchar(25) null,
                        password varchar(25) null,
                        email varchar(25)
                        )";

$createTable = mysqli_query($connection, $tableQuery);

$tableQuery = "CREATE TABLE IF NOT EXISTS `newCars`(
                        newId       int(6) AUTO_INCREMENT PRIMARY KEY,
                        vehicleID   int(6), 
    					foreign key(vehicleID) references Vehicles(id),
                        year        int(4) null
                        )";

$createTable = mysqli_query($connection, $tableQuery);

$tableQuery = "CREATE TABLE IF NOT EXISTS `usedCars`(
                        usedId      int(6) AUTO_INCREMENT PRIMARY KEY,
                        vehicleID   int(6), 
                        foreign key(vehicleID) references Vehicles(id),
                        year        int(4) null
                        )";

$createTable = mysqli_query($connection, $tableQuery);

$tableQuery = "CREATE TABLE IF NOT EXISTS `ContactForm`(
                        Id      int(6) AUTO_INCREMENT PRIMARY KEY,
                        name    varchar(25), 
                        email   varchar(75),
                        message varchar (15000)
                        )";

$createTable = mysqli_query($connection, $tableQuery);
